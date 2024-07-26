<?php
$servername = "localhost";
$username = "root";
$password = "#HiwoteMkebede2125#";
$dbname = "realstate_website";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
