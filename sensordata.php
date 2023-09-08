<?php
    date_default_timezone_set('Asia/Singapore'); 
require 'esp_authentication.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $api_key = send_data($_POST["api_key"]);

    if ($api_key == PROJECT_API_KEY) {
        $bin1 = send_data($_POST["bin1"]);
        $bin2 = send_data($_POST["bin2"]);
        $timestamp = send_data($_POST["timestamp"]); // Receive the timestamp from the ESP

        // Convert the received timestamp to PST (Pacific Standard Time)
        $datetime_obj = new DateTime($timestamp, new DateTimeZone('UTC'));
        $pst_timezone = new DateTimeZone('Asia/Singapore');
        $datetime_obj->setTimezone($pst_timezone);

        // Get separate date and time strings
        $date = $datetime_obj->format('Y-m-d');
        $time = $datetime_obj->format('h:i:s A'); 

        // Insert Data
        $sql = "INSERT INTO thesis_data(bin1, bin2, timestamp_date, timestamp_time) 
                VALUES('$bin1','$bin2', '$date', '$time')"; 

        if ($db->query($sql) === TRUE) {
            echo "OK. INSERT ID: " . $db->insert_id;
        } else {
            echo "Error: " . $sql . "<br>" . $db->error;
        }
    } else {
        echo "Wrong API Key";
    }
} else {
    echo "No HTTP POST request found";
}

function send_data($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
