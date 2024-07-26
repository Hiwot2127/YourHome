<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
session_start();

include 'db_connection.php';

$property_data_json = $_POST['property_data'];
$propertyData = json_decode($property_data_json, true);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userId = $propertyData['userId'];
            $propertyType = $propertyData['propertyType'];
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

    $housePicture = $_FILES['house_picture']['name'];
    $targetDir = "images/";
    $targetFile = $targetDir . basename($housePicture);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["house_picture"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    if ($_FILES["house_picture"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["house_picture"]["tmp_name"], $targetFile)) {
            echo "The file " . htmlspecialchars(basename($housePicture)) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    $stmt = "INSERT INTO properties (user_id,property_type, house_picture, virtual_tour, phone_number, telegram_account, title, map_address, bedrooms, bathrooms, area, details, year_built, price, property_history) 
                    VALUES ('$userId','$propertyType', '$targetFile', '$virtualTour', '$phoneNumber', '$telegramAccount', '$title', '$mapAddress', '$bedrooms', '$bathrooms', '$area', '$details', '$yearBuilt', '$price', '$propertyHistory')";



    if ($conn->query($stmt) === TRUE) {
        echo "New property posted successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
