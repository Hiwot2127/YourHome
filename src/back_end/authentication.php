<?php

session_start();
// $servername = "localhost";
// $username = "root";
// $password = "HiwoteMkebede2125#";
// $database = "realstate_website";


include 'db_connection.php';

$email = test_input($_POST['email']);
$password = test_input($_POST['password']);

$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        setcookie("id", $row['id'], time() + (86400 * 30), "/");
        $_SESSION['id'] = $row['id'];
        $_SESSION['role'] = $row['role'];
        $_SESSION['first_name'] = $row['first_name'];
        $_SESSION['last_name'] = $row['last_name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['phone_number'] = $row['phone_number'];
        $_SESSION['city'] = $row['city'];
        $_SESSION['user_picture'] = $row['user_picture'];

        if($row['role'] === "admin"){
            header("Location: ../app/pages/admin_page/pages/admin_dashboard.php");
            exit();

        }
        $id = $_SESSION['id'];
        $user_posts = "SELECT * FROM properties WHERE user_id = '$id'";
        $result = $conn->query($user_posts);

        if ($result->num_rows > 0) {
            $posts = array(); 
            while ($row = $result->fetch_assoc()) {
                $post = array(
                    'title' => $row["title"],
                    'property_type' => $row["property_type"],
                    'house_picture' => $row["house_picture"],
                    'virtual_tour' => $row["virtual_tour"],
                    'phone_number' => $row["phone_number"],
                    'telegram_account' => $row["telegram_account"],
                    'map_address' => $row["map_address"]
                );
                $posts[] = $post; 
            }
            $_SESSION['posts'] = $posts; 
        }

        header("Location: ../app/pages/list_page.php");

        exit();
    } else {
        echo "<script>alert('Incorrect password'); window.location.href = 'signIn.php';</script>";
        exit();
    }
} else {
    echo "<script>alert('User not found'); window.location.href = 'signIn.php';</script>";
    exit();
}

$conn->close();

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
