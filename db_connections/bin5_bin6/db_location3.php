<?php
// Include database connection and authentication
include('../../authentication.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["location3"])) {
        $newLocation = $_POST["location3"];

        // Prepare and bind the update query
        $updateQuery = "UPDATE thesis_data3 SET location3 = ?";
        $stmt = $conn->prepare($updateQuery);
        $stmt->bind_param("s", $newLocation);

        if ($stmt->execute()) {
            echo "success";
        } else {
            echo "error";
        }

        // Close the statement and database connection
        $stmt->close();
        $conn->close();
    } else {
        echo "Invalid request";
    }
} else {
    echo "Invalid request method";
}
?>

