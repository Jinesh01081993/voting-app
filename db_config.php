<?php
$servername = "100.27.227.71";   // or your DB server IP
$username   = "votinguser";
$password   = "Password@123";
$database   = "votingdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
