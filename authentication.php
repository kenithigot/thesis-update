<?php
// Database Credentials
$hostname = 'localhost';
$username = 'root';
$db_password = '';
$database = 'thesis';

// Special keys for ESP8266 POST Request
$unique_api_key = 'aGVsbG8';

$sms_id = '482e472e-3a46-49c0-8081-440c478fbae4';
$sms_key = 'uf4Be82BH9PvC8dMN7LpyZTBOeSmRdQVQdH4aN9f';

// Create connection
$conn = new mysqli($hostname, $username, $db_password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
