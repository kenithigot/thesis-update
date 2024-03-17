<?php

// Include your database connection file or configure it here
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "thesis";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT email_address FROM add_admin WHERE user_type = 'user'"; // Update the query based on your requirements
$result = $conn->query($sql);

$user = ($result->num_rows > 0) ? $result->fetch_assoc()['email_address'] : '';

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Other head elements remain unchanged -->
</head>
<body>
    <!-- Other HTML elements remain unchanged -->
    <script>
        // Other JavaScript code remains unchanged
        if (code) {
            // Simulate server-side verification
            // Replace this with actual server-side logic
            if (code.data === '<?php echo $user; ?>') {
                // Redirect to the next page upon successful login
                window.location.href = 'next_page.php';
            } else {
                document.getElementById('status').innerText = 'Invalid QR code.';
            }
        } else {
            document.getElementById('status').innerText = 'No QR code found in the image.';
        }
    </script>
</body>
</html>
