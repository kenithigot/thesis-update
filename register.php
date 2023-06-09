<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'thesis';

// Create a new database connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the form data
$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare and execute the SQL query to insert the data into the table
$stmt = $conn->prepare("INSERT INTO thesis_trial (first_name, last_name, email_address, password) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $firstName, $lastName, $email, $password);

if ($stmt->execute()) {
    // Registration successful
    echo "Registration successful. Data saved to the database.";
} else {
    // Error occurred during registration
    echo "Error: " . $stmt->error;
}

// Close the prepared statement and database connection
$stmt->close();
$conn->close();
?>
