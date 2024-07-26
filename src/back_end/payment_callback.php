<?php
session_start();

include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_SESSION['property_data'])) {
        $propertyData = json_decode($_SESSION['property_data'], true);
        if ($propertyData) {
            $userId = $propertyData['userId'];
            $propertyType = $propertyData['propertyType'];
            $housePicture = $propertyData['housePicture'];
            $virtualTour = $propertyData['virtualTour'];
            $phoneNumber = $propertyData['phoneNumber'];
            $telegramAccount = $propertyData['telegramAccount'];
            $title = $propertyData['title'];
            $mapAddress = $propertyData['mapAddress'];
            $bedrooms = $propertyData['bedrooms'];
            $bathrooms = $propertyData['bathrooms'];
            $area = $propertyData['area'];
            $details = $propertyData['details'];
            $yearBuilt = $propertyData['yearBuilt'];
            $price = $propertyData['price'];
            $propertyHistory = $propertyData['propertyHistory'];

            print_r($propertyData);

            if($housePicture){
            $targetDir = "uploads/";
            $targetFile = $targetDir . basename($housePicture['name']);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            $check = getimagesize($housePicture["tmp_name"]);
            if ($check !== false) {
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }

            if ($housePicture["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }

            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }

            
            } else {
                if (!move_uploaded_file($housePicture["tmp_name"], $targetFile)) {
                    $housePicture = "test.png";
                    $stmt = "INSERT INTO properties (user_id,property_type, house_picture, virtual_tour, phone_number, telegram_account, title, map_address, bedrooms, bathrooms, area, details, year_built, price, property_history) 
                    VALUES ('$userId','$propertyType', '$housePicture', '$virtualTour', '$phoneNumber', '$telegramAccount', '$title', '$mapAddress', '$bedrooms', '$bathrooms', '$area', '$details', '$yearBuilt', '$price', '$propertyHistory')";


                    if ($conn->query($stmt) === TRUE) {
                        echo "New property posted successfully";
                        header("Location: ../app/pages/profile.php");


                    } else {
                        echo "Error: " . $stmt->error;
                    }

                    $stmt->close();
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        } else {
            echo "Invalid property data or payment validation failed";
        }

    } else {
        echo "No property data found";
    }
} else {
    echo "Invalid request method";
}

$conn->close();
?>
