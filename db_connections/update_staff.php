<?php
include('../authentication.php');

if (isset($_POST['staff_id'])) {
    $staff_id = $_POST['staff_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone_num = $_POST['phone_num'];
    $status = $_POST['status'];

    $sql = "UPDATE add_staff SET fname='$fname', lname='$lname', phone_num='$phone_num', status='$status' WHERE staff_id='$staff_id' ";
    $sql_run = mysqli_query($conn, $sql);

    if ($sql_run) {
        echo "success"; // Return this value to the AJAX success callback
    } else {
        echo "error"; // Return this value to the AJAX success callback
    }
}
?>
