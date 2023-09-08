<?php
// Include database connection and authentication
include('../../authentication.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["location2"])) {
        $newLocation = $_POST["location2"];

        $updateQuery = "UPDATE thesis_data2 SET location2 = ?";
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

