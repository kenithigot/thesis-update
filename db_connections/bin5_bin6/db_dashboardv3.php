<?php
//database connection
include('../../authentication.php'); 

$sql = "SELECT * FROM `thesis_data3` ORDER BY data_id DESC";
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        $status5 = "";
        $bin5 = $row['bin5'];
        if ($bin5 !== null && $bin5 !== '') {
            if ($bin5 > 36) {
                $status5 = "Full";
            } elseif ($bin5 <= 36 && $bin5 >= 15) {
                $status5 = "Half Full";
            } else{
                $status5 = "Empty";
            }
        } else {
            $bin5 = 0;
        }

        $status6 = "";
        $bin6 = $row['bin6'];
        if ($bin6 !== null && $bin6 !== '') {
            if ($bin6 > 36) {
                $status6 = "Full";
            } elseif ($bin6 <= 36 && $bin6 >= 15) {
                $status6 = "Half Full";
            } else{
                $status6 = "Empty";
            }
        } else {
            $bin6 = 0;
        }

        // Create an object representing a row in the table
        $rowData = array(
            'timestamp_date' => $row['timestamp_date'],
            'timestamp_time' => $row['timestamp_time'],
            'bin5' => ($bin5 !== null && $bin5 !== '') ? $bin5 . " cm" : '0 cm',
            'status5' => $status5,
            'bin6' => ($bin6 !== null && $bin6 !== '') ? $bin6 . " cm" : '0 cm',
            'status6' => $status6,
            'trash_type1' => "Biodegradable",
            'trash_type2' => "Non-biodegradable"  
        );
        
        // Add the row object to the data array
        $data[] = $rowData;
    }
}

$conn->close();

// Return the data in the expected JSON format
$response = array('data' => $data);
echo json_encode($response);
?>
