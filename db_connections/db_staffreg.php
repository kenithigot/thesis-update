<?php
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

// Use prepared statements to prevent SQL injection
if (isset($_POST['btn-edit_staff'])) {
    $staff_id = $_POST["staff_id"];
    $fname = $_POST["fname"];
    $mname = $_POST["mname"];
    $lname = $_POST["lname"];
    $phone_num = $_POST["phone_num"];

    // Use prepared statement
    $sql = "UPDATE add_staff SET fname='$fname', mname='$mname', lname='$lname', phone_num='$phone_num' WHERE staff_id='$staff_id'";
    $query_run = mysqli_query($conn, $sql);

    if($query_run){
        echo '<script> alert ("Information Updated!")</script>';
        header("Location:testping.php");
    }
    else{
        echo '<script> alert("Information Not Updated"); </script>';
    }
}
?>
