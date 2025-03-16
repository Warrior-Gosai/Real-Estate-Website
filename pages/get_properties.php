<?php
$host = "localhost"; // Change this to your database host
$username = "root";  // Change this to your database username
$password = "";      // Change this to your database password
$database = "real_estate_db"; // Database name

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch properties from the database
$sql = "SELECT id, address, property_image, property_type, asking_price FROM properties";
$result = $conn->query($sql);

$properties = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $properties[] = $row;
    }
}

$conn->close();

// Return properties as JSON
echo json_encode($properties);
?>
