<?php

//database connection
include('authentication.php'); 

// Retrieve the recent added values of bin1 and bin2 from the database
$sql = "SELECT bin5, bin6 FROM thesis_data3 ORDER BY data_id DESC LIMIT 1";
$result = $conn->query($sql);

$bin1ButtonColor = '#ffffff'; // Default color for bin1 is white
$bin2ButtonColor = '#ffffff'; // Default color for bin2 is white

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $bin1Value = $row['bin5'];
    $bin2Value = $row['bin6'];

    // Set the button color for bin1 based on its value
    if ($bin1Value > 36) {
        
        $bin1ButtonColor = '#fd100f'; // Red
    } elseif ($bin1Value <= 36 && $bin1Value >= 15) {
        $bin1ButtonColor = '#fdb81c'; // Orange
    } else {
        $bin1ButtonColor = '#48b314'; // Green
    }

    // Set the button color for bin2 based on its value
    if ($bin2Value > 36) {
        $bin2ButtonColor = '#fd100f'; // Red
    } elseif ($bin2Value <= 36 && $bin2Value >= 15) {
        $bin2ButtonColor = '#fdb81c'; // Orange
    } else {
        $bin2ButtonColor = '#48b314'; // Green
    }
}

$conn->close();

?>
