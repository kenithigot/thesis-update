<?php
include('authentication.php');

if (isset($_POST['adminId'])) {
    $adminId = $_POST['adminId'];

    // Check if a file was uploaded
    if (isset($_FILES['profilePicture']) && $_FILES['profilePicture']['error'] === 0) {
        // Define a folder where you want to store uploaded profile pictures
        $uploadDir = 'imgs/users/';
        $uploadPath = $uploadDir . $_FILES['profilePicture']['name'];

        // Move the uploaded file to the specified directory
        if (move_uploaded_file($_FILES['profilePicture']['tmp_name'], $uploadPath)) {
            // The file was uploaded successfully, update the database with the new profile picture path

            // Check the connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Update the database with the new profile picture path
            $sql = "UPDATE add_admin SET
                profilePicture = '$uploadPath'
                WHERE admin_id = $adminId";

            if (mysqli_query($conn, $sql)) {
                echo json_encode(['success' => 'Profile picture updated successfully']);
            } else {
                echo json_encode(['error' => 'Failed to update profile picture']);
            }

            // Close the database connection
            mysqli_close($conn);
        } else {
            echo json_encode(['error' => 'Failed to move the uploaded file']);
        }
    } else {
        echo json_encode(['error' => 'File upload error']);
    }
} else {
    echo json_encode(['error' => 'Invalid request']);
}
?>
