<?php
include('../authentication.php');

$lastNotificationTime = 0; // Initialize the last notification time
$maxExecutionTime = 30;   // Maximum execution time in seconds

require_once __DIR__ . '/vendor/autoload.php';  // Corrected path
use GuzzleHttp\Client;

// Assuming $conn is the database connection
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

set_time_limit($maxExecutionTime); // Set the maximum execution time

$client = new Client();  // Instantiate the GuzzleHttp client

while (true) {
    $sql_result = "SELECT bin1, bin2 FROM `thesis_data` ORDER BY data_id DESC LIMIT 1";
    $sql_result_data = $conn->query($sql_result);

    if ($sql_result_data) {
        if ($sql_result_data->num_rows > 0) {
            $row = $sql_result_data->fetch_assoc();
            $bin1 = $row['bin1'];
            $bin2 = $row['bin2'];

            if ($bin1 >= 45 || $bin2 >= 45) { 
                $sql_staff = "SELECT phone_num FROM `add_staff` WHERE `status` = 'ACTIVE' ";
                $sql_staff_pnum = $conn->query($sql_staff);

                while ($staff_row = $sql_staff_pnum->fetch_assoc()) {
                    $phone_num = $staff_row['phone_num'];
                    $message = '';

                    if ($bin1 == 40) {
                        $message = "Biodegradable (Bin 1) is ready for collection";
                    } elseif ($bin2 == 40) {
                        $message = "Non-biodegradable (Bin 2) is ready for collection";
                    }

                    if (!empty($message) && time() - $lastNotificationTime >= 10) { // Change the interval to 10 seconds
                        $response = $client->request("POST", "https://api.sms.fortres.net/v1/messages", [
                            "headers" => [
                                "Content-Type" => "application/x-www-form-urlencoded"
                            ],
                            "auth" => [$id, $password ],
                            "form_params" => [ // Set the form parameters here
                                "recipient" => $phone_num,
                                "message" => $message
                            ]
                        ]);

                        $lastNotificationTime = time();
                    }
                }
            } else {
                echo "Neither bin1 nor bin2 value is 40.";
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
