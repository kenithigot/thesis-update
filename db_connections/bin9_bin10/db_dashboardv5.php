<?php
//database connection
include('../../authentication.php'); 

$sql = "SELECT * FROM `thesis_data5` ORDER BY data_id DESC";
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        $status9 = "";
        $bin9 = $row['bin9'];
        if ($bin9 !== null && $bin9 !== '') {
            if ($bin9 > 36) {
                $status9 = "Full";
            } elseif ($bin9 <= 36 && $bin9 >= 15) {
                $status9 = "Half Full";
            } else{
                $status9 = "Empty";
            }
        } else {
            $bin9 = 0;
        }

        $status10 = "";
        $bin10 = $row['bin10'];
        if ($bin10 !== null && $bin10 !== '') {
            if ($bin10 > 36) {
                $status10 = "Full";
            } elseif ($bin10 <= 36 && $bin10 >= 15) {
                $status10 = "Half Full";
            } else{
                $status10 = "Empty";
            }
        } else {
            $bin10 = 0;
        }

        // Create an object representing a row in the table
        $rowData = array(
            'timestamp_date' => $row['timestamp_date'],
            'timestamp_time' => $row['timestamp_time'],
            'bin9' => ($bin9 !== null && $bin9 !== '') ? $bin9 . " cm" : '0 cm',
            'status9' => $status9,
            'bin10' => ($bin10 !== null && $bin10 !== '') ? $bin10 . " cm" : '0 cm',
            'status10' => $status10,
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
