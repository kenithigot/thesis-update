<?php
// database connection
include('../../authentication.php');

// Query the values from bin1 and bin2 columns
$sql = "SELECT bin7, bin8 FROM thesis_data4 ORDER BY data_id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $bin1 = intval($row['bin7']);
    $bin2 = intval($row['bin8']);

    // Define the maximum value for the progress calculation
    $maxValue = 40;

    // Calculate the progress bar percentage for bin1
    $percentage1 = ($bin1 / $maxValue) * 100;
    // Calculate the progress bar percentage for bin2
    $percentage2 = ($bin2 / $maxValue) * 100;

    // Ensure the percentages are capped at 100%
    $percentage1 = min($percentage1, 100);
    $percentage2 = min($percentage2, 100);

    // Convert percentages to whole numbers
    $percentage1 = intval($percentage1);
    $percentage2 = intval($percentage2);
} else {
    // Default percentages if no values found
    $percentage1 = 0;
    $percentage2 = 0;
}

// Close the database connection
$conn->close();

// Return the percentages as a JSON response
header('Content-Type: application/json');
echo json_encode(array('percentage1' => $percentage1, 'percentage2' => $percentage2));
?>
