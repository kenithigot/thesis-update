<?php
    include('authentication.php');

    if (isset($_POST['adminId'])) {
        $adminId = $_POST['adminId'];

        // Check the connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Update the database without the profile picture
        $sql = "UPDATE add_admin SET
            firstName = '{$_POST['firstName']}',
            middleName = '{$_POST['middleName']}',
            lastName = '{$_POST['lastName']}',
            age = '{$_POST['age']}',
            birthDate = '{$_POST['birthDate']}',
            gender = '{$_POST['gender']}',
            civilStatus = '{$_POST['civilStatus']}',
            phoneNumber = '{$_POST['phoneNumber']}',
            address = '{$_POST['address']}',
            currentAddress = '{$_POST['currentAddress']}',
            email_address = '{$_POST['email_address']}',
            user_type = '{$_POST['user_type']}'
            WHERE admin_id = $adminId";

        if (mysqli_query($conn, $sql)) {
            echo json_encode(['success' => 'Data updated successfully']);
        } else {
            echo json_encode(['error' => 'Failed to update data']);
        }

        // Close the database connection
        mysqli_close($conn);
    } else {
        echo json_encode(['error' => 'Invalid request']);
    }
?>
