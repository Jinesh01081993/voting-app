<?php

require 'vendor/autoload.php';

use Aws\SecretsManager\SecretsManagerClient;

$client = new SecretsManagerClient([
    'version' => 'latest',
    'region'  => 'us-east-1'
]);

$result = $client->getSecretValue([
    'SecretId' => 'votingapp/database',
]);

$secret = json_decode($result['SecretString'], true);

$conn = new mysqli(
    $secret['DB_HOST'],
    $secret['DB_USER'],
    $secret['DB_PASSWORD'],
    $secret['DB_NAME']
);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

?>
