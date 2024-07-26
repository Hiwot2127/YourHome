<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Confirmation</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <h1>Payment Confirmation</h1>
    <p>Your payment was successful, and your property has been posted.</p>
    <a href="../app/pages/postForm2.php">Post another property</a>
</body>
</html>
<?php
echo ('data');
echo ($_SESSION['property_data']);
?>