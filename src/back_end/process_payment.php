<?php
session_start();

// Function to sanitize input data
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Extract required payment data from $_POST
    $public_key = isset($_POST['public_key']) ? test_input($_POST['public_key']) : '';
    $tx_ref = isset($_POST['tx_ref']) ? test_input($_POST['tx_ref']) : '';
    $amount = isset($_POST['amount']) ? test_input($_POST['amount']) : '';
    $currency = isset($_POST['currency']) ? test_input($_POST['currency']) : '';
    $email = isset($_POST['email']) ? test_input($_POST['email']) : '';
    $first_name = isset($_POST['first_name']) ? test_input($_POST['first_name']) : '';
    $last_name = isset($_POST['last_name']) ? test_input($_POST['last_name']) : '';
    $title = isset($_POST['title']) ? test_input($_POST['title']) : '';
    $description = isset($_POST['description']) ? test_input($_POST['description']) : '';
    $logo = isset($_POST['logo']) ? test_input($_POST['logo']) : '';
    $callback_url = isset($_POST['callback_url']) ? test_input($_POST['callback_url']) : '';
    $return_url = isset($_POST['return_url']) ? test_input($_POST['return_url']) : '';
    $meta_title = isset($_POST['meta']['title']) ? test_input($_POST['meta']['title']) : '';
    $property_data = isset($_POST['property_data']) ? $_POST['property_data'] : '';

    // Store property_data in session for later use
    $_SESSION['property_data'] = $property_data;

    // Validate required fields
    if (empty($public_key) || empty($tx_ref) || empty($amount) || empty($currency) || empty($email) || empty($first_name) || empty($last_name) || empty($title) || empty($callback_url) || empty($return_url)) {
        die('Required fields are missing.');
    }

    // Prepare data for payment initialization
    $data = [
        "amount" => $amount,
        "currency" => $currency,
        "email" => $email,
        "first_name" => $first_name,
        "last_name" => $last_name,
        "phone_number" => "0912345678", // Example phone number
        "tx_ref" => $tx_ref,
        "callback_url" => $callback_url,
        "return_url" => $return_url,
        "customization" => [
            "title" => $title,
            "description" => $description
        ]
    ];

    // Initialize cURL session
    $curl = curl_init();

    // Set cURL options
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.chapa.co/v1/transaction/initialize',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer CHASECK_TEST-U1aKrwXlGX5oY28t31OuSd2pMFes3MY1',
            'Content-Type: application/json'
        ),
    ));

    // Execute cURL request and capture response
    $response = curl_exec($curl);

    // Check for cURL errors
    if (curl_errno($curl)) {
        echo 'Error:' . curl_error($curl);
    } else {
        // Decode JSON response from Chapa API
        $response_data = json_decode($response, true);

        // Check if payment initialization was successful
        if (isset($response_data['status']) && $response_data['status'] === 'success') {
            // Include database connection
            include 'db_connection.php';

            // Decode property_data JSON
            $propertyData = json_decode($property_data, true);

            // Insert property data into database
            $userId = isset($propertyData['userId']) ? $propertyData['userId'] : '';
            $propertyType = isset($propertyData['propertyType']) ? $propertyData['propertyType'] : '';
            $virtualTour = isset($propertyData['virtualTour']) ? $propertyData['virtualTour'] : '';
            $phoneNumber = isset($propertyData['phoneNumber']) ? $propertyData['phoneNumber'] : '';
            $telegramAccount = isset($propertyData['telegramAccount']) ? $propertyData['telegramAccount'] : '';
            $title = isset($propertyData['title']) ? $propertyData['title'] : '';
            $mapAddress = isset($propertyData['mapAddress']) ? $propertyData['mapAddress'] : '';
            $bedrooms = isset($propertyData['bedrooms']) ? $propertyData['bedrooms'] : '';
            $bathrooms = isset($propertyData['bathrooms']) ? $propertyData['bathrooms'] : '';
            $area = isset($propertyData['area']) ? $propertyData['area'] : '';
            $details = isset($propertyData['details']) ? $propertyData['details'] : '';
            $yearBuilt = isset($propertyData['yearBuilt']) ? $propertyData['yearBuilt'] : '';
            $price = isset($propertyData['price']) ? $propertyData['price'] : '';
            $propertyHistory = isset($propertyData['propertyHistory']) ? $propertyData['propertyHistory'] : '';

            // Validate userId to avoid SQL injection
            if (empty($userId)) {
                die('User ID is required.');
            }

            // Prepare SQL statement to insert property data
            $stmt = $conn->prepare("INSERT INTO properties (user_id, property_type, virtual_tour, phone_number, telegram_account, title, map_address, bedrooms, bathrooms, area, details, year_built, price, property_history) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

            // Bind parameters to SQL statement
            $stmt->bind_param("ssssssssssssss", $userId, $propertyType, $virtualTour, $phoneNumber, $telegramAccount, $title, $mapAddress, $bedrooms, $bathrooms, $area, $details, $yearBuilt, $price, $propertyHistory);

            // Execute SQL statement
            if ($stmt->execute()) {
                // Redirect to payment checkout URL
                header('Location: ' . $response_data['data']['checkout_url']);
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }

            // Close statement and connection
            $stmt->close();
            $conn->close();

        } else {
            // Payment initialization failed
            echo 'Payment initialization failed: ' . $response_data['message'];
        }
    }

    // Close cURL session
    curl_close($curl);
} else {
    // Invalid request method
    echo 'Invalid request method.';
}
?>
