<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

include 'db_connection.php';

$first_name = test_input($_POST['first_name'] ?? '');
$last_name = test_input($_POST['last_name'] ?? '');
$email = test_input($_POST['email'] ?? '');
$phone_number = test_input($_POST['phone_number'] ?? '');
$city = test_input($_POST['city'] ?? '');
$password = test_input($_POST['password'] ?? '');

$errors = array();

// Validate inputs
if (empty($first_name)) {
    $errors['first_name'] = "First name is required.";
}
if (empty($last_name)) {
    $errors['last_name'] = "Last name is required.";
}
if (empty($email)) {
    $errors['email'] = "Email is required.";
}
if (empty($phone_number)) {
    $errors['phone_number'] = "Phone number is required.";
}
if (empty($city)) {
    $errors['city'] = "City is required.";
}
if (empty($password)) {
    $errors['password'] = "Password is required.";
}

if (!empty($first_name) && !preg_match("/^[a-zA-Z ]*$/", $first_name)) {
    $errors['first_name'] = "First name should only contain letters and white spaces.";
}

if (!empty($last_name) && !preg_match("/^[a-zA-Z ]*$/", $last_name)) {
    $errors['last_name'] = "Last name should only contain letters and white spaces.";
}

if (!empty($city) && !preg_match("/^[a-zA-Z ]*$/", $city)) {
    $errors['city'] = "City should only contain letters and white spaces.";
}

if (!empty($phone_number) && !preg_match("/^\+251[0-9]{9}$/", $phone_number)) {
    $errors['phone_number'] = "Invalid Ethiopian phone number. It should start with +251 and have 12 digits.";
}

if (!empty($password) && strlen($password) < 8) {
    $errors['password'] = "Password must be at least 8 characters long.";
}

// Handle profile picture upload
$uploadOk = 1;
if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] == UPLOAD_ERR_OK) {
    $userPicture = $_FILES['profile_picture']['name'];
    $targetDir = "images/users/";
    $targetFile = $targetDir . basename($userPicture);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["profile_picture"]["tmp_name"]);

    if ($check !== false) {
        if ($_FILES["profile_picture"]["size"] <= 500000) {
            if (in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])) {
                if (!move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $targetFile)) {
                    $errors['profile_picture'] = "Sorry, there was an error uploading your file.";
                    $uploadOk = 0;
                }
            } else {
                $errors['profile_picture'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
        } else {
            $errors['profile_picture'] = "Sorry, your file is too large.";
            $uploadOk = 0;
        }
    } else {
        $errors['profile_picture'] = "File is not an image.";
        $uploadOk = 0;
    }
} else {
    $errors['profile_picture'] = "No profile picture uploaded or there was an error during upload.";
    $uploadOk = 0;
}

// Display errors and exit if there are any
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
    exit();
}

// Insert user data into the database
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, phone_number, city, user_picture, password) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $first_name, $last_name, $email, $phone_number, $city, $targetFile, $hashed_password);

if ($stmt->execute()) {
    echo "New user registered successfully";
    header("Location: ../app/pages/signIn.php");
    exit(); 
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
