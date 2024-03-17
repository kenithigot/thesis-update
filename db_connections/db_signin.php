<?php
session_start();
include('authentication.php'); 

$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$loginStatus = false; 

if (!empty($email) && !empty($password)) {
    $sql = "SELECT * FROM add_admin WHERE email_address=?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("s", $email);
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result) {
            if ($result->num_rows == 1) { // Change to 1 since email should be unique
                $row = $result->fetch_assoc();
                $admin_id = $row['admin_id'];
                $hashedPasswordFromDB = $row['password'];
                $userType = $row['user_type'];

                // Verify the provided password against the hashed password from the database
                if (password_verify($password, $hashedPasswordFromDB)) {
                    $_SESSION['login_success'] = true;
                    $_SESSION['admin_id'] = $admin_id; 
                    $_SESSION['user_type'] = $userType;

                    $loginStatus = true;
                    header("Location: dashboard.php");
                    exit();
                }
            }
        } else {
            echo "Query execution error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Statement preparation error: " . $conn->error;
    }
}

$conn->close();

?>
