<?php

include 'db_connection.php';

$category = $_GET['category'];
$location = $_GET['location'];
$minPrice = $_GET['min_price'];
$maxPrice = $_GET['max_price'];

$sql = "SELECT * FROM properties WHERE property_type = ? AND map_address LIKE ? AND price BETWEEN ? AND ?";
$stmt = $conn->prepare($sql);
$location = "%" . $location . "%";
$stmt->bind_param("ssdd", $category, $location, $minPrice, $maxPrice);

$stmt->execute();
$result = $stmt->get_result();

$properties = [];

while ($row = $result->fetch_assoc()) {
    $properties[] = $row;
}

$stmt->close();
$conn->close();

header('Content-Type: application/json');
echo json_encode($properties);
?>