<?php

$servername = "localhost";
$username   = "votinguser";
$password   = "Password@123";
$database   = "votingdb";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

?>
