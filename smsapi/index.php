<?php
include('../authentication.php');

$lastNotificationTime = 0; // Initialize the last notification time
$maxExecutionTime = 300;   // Maximum execution time in seconds

require_once __DIR__ . '/../vendor/autoload.php';  // Corrected path
use GuzzleHttp\Client;

// Assuming $conn is the database connection
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

set_time_limit($maxExecutionTime); // Set the maximum execution time

$client = new Client();  // Instantiate the GuzzleHttp client

while (true) {
    $sql_result = "SELECT bin1 FROM `thesis_data` ORDER BY data_id DESC LIMIT 1";
    $sql_result_data = $conn->query($sql_result);

    if ($sql_result_data) {
        if ($sql_result_data->num_rows > 0) {
            $row = $sql_result_data->fetch_assoc();
            $bin1 = $row['bin1'];

            if ($bin1 == 40) {
                $sql_staff = "SELECT phone_num FROM `add_staff` WHERE `status` = 'ACTIVE' ";
                $sql_staff_pnum = $conn->query($sql_staff);

                while ($staff_row = $sql_staff_pnum->fetch_assoc()) {
                    $phone_num = $staff_row['phone_num'];

                    if (time() - $lastNotificationTime >= 20) {
                        $response = $client->request("POST", "https://api.sms.fortres.net/v1/messages", [
                            "headers" => [
                                "Content-type" => "application/json"
                            ],
                            "auth" => ["94b7b1f9-bb4a-4381-a83c-9a65c67895d6", "huOH06fB4ikMMvlxnZf1WkLP5dchSGjOc4QsaKvq"],
                            "json" => [
                                "recipient" => $phone_num,
                                "message" => "uy uy 40 na"
                            ]
                        ]);

                        $lastNotificationTime = time();
                    }
                }
            } else {
                echo "Bin1 value is not 40.";
            }
        } else {
            echo "No data found.";
        }
    } else {
        echo "Error in query: " . $conn->error;
    }

    sleep(1); // Sleep for 1 second before checking again
}
?>
