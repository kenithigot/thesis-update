<?php
include('../authentication.php');

// Initialize a variable to keep track of whether the password was updated successfully
$passwordUpdated = false;
$passwordNotMatch = false;

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];

    // Check if passwords match
    if ($password === $confirmPassword) {
    
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $sql = "UPDATE add_admin SET password='$hashedPassword'";

        if ($conn->query($sql) === TRUE) {
            $passwordUpdated = true; 
        } else {
            echo "Error updating password: " . $conn->error;
        }
    } else {
        $passwordNotMatch = true;
    }
}

// Close the database connection
$conn->close();
?>