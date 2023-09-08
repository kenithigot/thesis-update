<?php
//database connection
include('../../authentication.php'); 

$sql = "SELECT * FROM `thesis_data2` ORDER BY data_id DESC";
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $status3 = "";
        $bin3 = $row['bin3'];
        if ($bin3 !== null && $bin3 !== '') {
            if ($bin3 > 36) {
                $status3 = "Full";
            } elseif ($bin3 <= 36 && $bin3 >= 15) {
                $status3 = "Half Full";
            } else{
                $status3 = "Empty";
            }
        } else {
            $bin3 = 0;
        }

        $status4 = "";
        $bin4 = $row['bin4'];
        if ($bin4 !== null && $bin4 !== '') {
            if ($bin4 > 36) {
                $status4 = "Full";
            } elseif ($bin4 <= 36 && $bin4 >= 15) {
                $status4 = "Half Full";
            } else{
                $status4 = "Empty";
            }
        } else {
            $bin4 = 0;
        }

        // Create an object representing a row in the table
        $rowData = array(
            'timestamp_date' => $row['timestamp_date'],
            'timestamp_time' => $row['timestamp_time'],
            'bin3' => ($bin3 !== null && $bin3 !== '') ? $bin3 . " cm" : '0 cm',
            'status3' => $status3,
            'bin4' => ($bin4 !== null && $bin4 !== '') ? $bin4 . " cm" : '0 cm',
            'status4' => $status4,
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
