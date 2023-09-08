<?php

//database connection
include('../../authentication.php'); 

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Perform the SQL deletion query
    $sql = "DELETE FROM thesis_data5";  
    if ($conn->query($sql) === true) {
        // Return success status code
        http_response_code(200);
        exit();  // Stop executing the rest of the code
    } else {
        // Return error status code
        http_response_code(500);
        exit();  // Stop executing the rest of the code
    }
}
?>