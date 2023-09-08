<?php
//database connection
include('../../authentication.php'); 

$sql = "SELECT * FROM `thesis_data4` ORDER BY data_id DESC";
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        $status7 = "";
        $bin7 = $row['bin7'];
        if ($bin7 !== null && $bin7 !== '') {
            if ($bin7 > 36) {
                $status7 = "Full";
            } elseif ($bin7 <= 36 && $bin7 >= 15) {
                $status7 = "Half Full";
            } else{
                $status7 = "Empty";
            }
        } else {
            $bin7 = 0;
        }

        $status8 = "";
        $bin8 = $row['bin8'];
        if ($bin8 !== null && $bin8 !== '') {
            if ($bin8 > 36) {
                $status8 = "Full";
            } elseif ($bin8 <= 36 && $bin8 >= 15) {
                $status8 = "Half Full";
            } else{
                $status8 = "Empty";
            }
        } else {
            $bin8 = 0;
        }

        // Create an object representing a row in the table
        $rowData = array(
            'timestamp_date' => $row['timestamp_date'],
            'timestamp_time' => $row['timestamp_time'],
            'bin7' => ($bin7 !== null && $bin7 !== '') ? $bin7 . " cm" : '0 cm',
            'status7' => $status7,
            'bin8' => ($bin8 !== null && $bin8 !== '') ? $bin8 . " cm" : '0 cm',
            'status8' => $status8,
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
