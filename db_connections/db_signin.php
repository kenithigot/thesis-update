<?php
session_start();
include('authentication.php'); 

$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

if (!empty($email) && !empty($password)) {
    $sql = "SELECT * FROM add_admin WHERE email_address=? AND password=?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result) {
            if ($result->num_rows == 0) {
                $loginStatus = false;
            } else {
                $_SESSION['login_success'] = true;
                header("Location: dashboard.php");
                exit();
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