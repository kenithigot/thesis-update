<?php
$hostname = 'localhost';
$username = 'root';
$db_password = '';
$database = 'thesis';

// Create connection
$conn = new mysqli($hostname, $username, $db_password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve data from the database
$sql = "SELECT * FROM `data_bin`";
$result = $conn->query($sql);

$data = array();

// Fetch data from the result set
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Close the connection
$conn->close();

// Return the data in JSON format
echo json_encode(array("data" => $data));
?>
