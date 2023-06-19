<?php
$hostname = 'localhost';
$username = 'root';
$db_password = '';
$database = 'thesis';

// Create connection
$conn = new mysqli($hostname, $username, $db_password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `thesis_data`";
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $status1 = "";
        $bin1 = $row['bin1'];
        if ($bin1 > 50) {
            $status1 = "Empty";
        } elseif ($bin1 <= 30 && $bin1 >= 11) {
            $status1 = "Half Full";
        } elseif ($bin1 <= 10) {
            $status1 = "Full";
        }

        $status2 = "";
        $bin2 = $row['bin2'];
        if ($bin2 > 50) {
            $status2 = "Empty";
        } elseif ($bin2 <= 30 && $bin2 >= 11) {
            $status2 = "Half Full";
        } elseif ($bin2 <= 10) {
            $status2 = "Full";
        }

        // Create an object representing a row in the table
        $rowData = array(
            'data_id' => $row['data_id'],
            'date_time' => $row['date_time'],
            'bin1' => $row['bin1'],
            'status1' => $status1,
            'bin2' => $row['bin2'],
            'status2' => $status2,
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
