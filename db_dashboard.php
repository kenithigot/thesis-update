<?php
$hostname = 'localhost';
$username = 'root';
$db_password = '';
$database = 'thesis';

// Create connection
$conn = new mysqli($hostname, $username, $db_password, $database);

// Query to retrieve data from the database
$sql = "SELECT * FROM `data_bin`;";

// Execute the query

// Fetch data from the result set
$result = mysqli_query($conn, $sql);
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Return the data in JSON format
echo json_encode($data);
?>