<?php

include 'db_connection.php';

$property_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($property_id > 0) {
    $stmt = $conn->prepare("SELECT * FROM properties WHERE id = ?");
    $stmt->bind_param("i", $property_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $property = $result->fetch_assoc();
        echo json_encode($property);
    } else {
        echo json_encode(["error" => "Property not found"]);
    }

    $stmt->close();
} else {
    echo json_encode(["error" => "Invalid property ID"]);
}

$conn->close();
?>
