<?php
//database connection
include('../../authentication.php'); 

$sql = "SELECT * FROM `thesis_data` ORDER BY data_id DESC";
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $status1 = "";
        $bin1 = $row['bin1'];
        if ($bin1 !== null && $bin1 !== '') {
            if ($bin1 > 36) {
                $status1 = "Full";
            } elseif ($bin1 <= 36 && $bin1 >= 15) {
                $status1 = "Half Full";
            } else{
                $status1 = "Empty";
            }
        } else {
            $bin1 = 0;
        }

        $status2 = "";
        $bin2 = $row['bin2'];
        if ($bin2 !== null && $bin2 !== '') {
            if ($bin2 > 36) {
                $status2 = "Full";
            } elseif ($bin2 <= 36 && $bin2 >= 15) {
                $status2 = "Half Full";
            } else{
                $status2 = "Empty";
            }
        } else {
            $bin2 = 0;
        }

        // Create an object representing a row in the table
        $rowData = array(
            'timestamp_date' => $row['timestamp_date'],
            'timestamp_time' => $row['timestamp_time'],
            'bin1' => ($bin1 !== null && $bin1 !== '') ? $bin1 . " cm" : '0 cm',
            'status1' => $status1,
            'bin2' => ($bin2 !== null && $bin2 !== '') ? $bin2 . " cm" : '0 cm',
            'status2' => $status2,  
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
