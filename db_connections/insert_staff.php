<?php

include('../authentication.php');

if(isset($_POST['insertdata']))
{
    $staff_id = $_POST['staff_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone_num = $_POST['phone_num'];
    $status = $_POST['status'];

    $sql = "INSERT INTO add_staff (`fname`, `lname`,`phone_num`,`status`) VALUES ('$fname', '$lname','$phone_num','$status')";
    $sqlrun = mysqli_query($conn, $sql);

    if($sqlrun)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: ../staff_table.php')    ;
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>