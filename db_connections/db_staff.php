<?php
// // Database Credentials
// $hostname = 'localhost';
// $username = 'u959174543_thesis2';
// $db_password = 'MsKQm0x0#J5$';
// $database = 'u959174543_thesis2';

// // Special keys for ESP8266 POST Request
// $unique_api_key = 'aGVsbG8';

// Database Credentials
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

 if (isset($_POST['add_user'])) {
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $phone_num = $_POST['phone_num'];

    $sql = "INSERT INTO add_staff (fname, mname, lname, phone_num) VALUES ('$fname', '$mname', '$lname', '$phone_num')";
    if ($conn->query($sql) === TRUE) {
        // Data inserted successfully
        header("Location: testping.php");
    } else {
        // Error inserting data
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
 }

?>
