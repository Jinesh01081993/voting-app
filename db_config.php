<?php
$servername = "localhost";   // or your DB server IP
$username   = "your_db_user";
$password   = "your_db_password";
$database   = "your_db_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
