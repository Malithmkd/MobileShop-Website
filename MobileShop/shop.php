<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch phone data
$result = $conn->query("SELECT * FROM phones");

// Convert result to JSON
$phones = [];
while ($row = $result->fetch_assoc()) {
    $phones[] = $row;
}

echo json_encode($phones);

// Close connection
$conn->close();
?>
