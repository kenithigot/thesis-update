<?php
// database connection
include('../../authentication.php');

// Retrieve the recent added values of bin1 and bin2 from the database
$sql_bin1 = "SELECT bin7 FROM thesis_data4 ORDER BY data_id DESC LIMIT 1";
$result_bin1 = $conn->query($sql_bin1);

$sql_bin2 = "SELECT bin8 FROM thesis_data4 ORDER BY data_id DESC LIMIT 1";
$result_bin2 = $conn->query($sql_bin2);

$bin1ButtonColor = '#ffffff'; // Default color for bin1 is white
$bin2ButtonColor = '#ffffff'; // Default color for bin2 is white

// Fetch the value of bin1 and set its button color if a value is present
if ($result_bin1->num_rows > 0) {
    $row_bin1 = $result_bin1->fetch_assoc();
    $bin1Value = $row_bin1['bin7'];

    if ($bin1Value > 36) {
        $bin1ButtonColor = '#fd100f'; // Red
    } elseif ($bin1Value <= 36 && $bin1Value >= 15) {
        $bin1ButtonColor = '#fdb81c'; // Orange
    } else {
        $bin1ButtonColor = '#48b314'; // Green
    }
}

// Fetch the value of bin2 and set its button color if a value is present
if ($result_bin2->num_rows > 0) {
    $row_bin2 = $result_bin2->fetch_assoc();
    $bin2Value = $row_bin2['bin8'];

    if ($bin2Value > 36) {
        $bin2ButtonColor = '#fd100f'; // Red
    } elseif ($bin2Value <= 36 && $bin2Value >= 15) {
        $bin2ButtonColor = '#fdb81c'; // Orange
    } else {
        $bin2ButtonColor = '#48b314'; // Green
    }
}

$conn->close();

// Return the button colors as a JSON response
header('Content-Type: application/json');
echo json_encode(array('bin1ButtonColor' => $bin1ButtonColor, 'bin2ButtonColor' => $bin2ButtonColor));
?>
