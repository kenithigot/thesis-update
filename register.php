<?php
session_start(); // Start the session

// include_once('../includes/header.php');

$user_id = $_SESSION['auth_user']['user_id'];

if (isset($_POST['add'])) {
    $thesis_trial_email_address = $_POST['email_address'];
    $thesis_trial_password = $_POST['password'];
    $thesis_trial_first_name= $_POST['first_name'];
    $thesis_trial_last_name = $_POST['last_name'];

    // Prepare the SQL statement for inserting into the issues table
    $thesis_trial_sql = "INSERT INTO thesis_trial (email_address, password, first_name, last_name) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare the statement
    $thesis_trial_stmt = mysqli_prepare($con, $issues_sql);

    // Bind the parameters with the values
    mysqli_stmt_bind_param($thesis_trial_stmt, "sssssssssss", $thesis_trial_email_address, $thesis_trial_password,  $thesis_trial_first_name, $thesis_trial_last_name);

    // Execute the statement
    if (mysqli_stmt_execute($thesis_trial_stmt)) {
        $fileCount = count($_FILES['image']['name']);
        for ($i = 0; $i < $fileCount; $i++) {
            $fileName = $_FILES['image']['name'][$i];
            $subfilename = time() . $fileName;
            $first_10_chars = substr($subfilename, 0, 10);
            $last_4_chars = substr($subfilename, -5);
            $newfilename = $first_10_chars . $last_4_chars;

            // Prepare the SQL statement for inserting into the issues_attachment table
            $attachment_sql = "INSERT INTO issues_attachment (`attachment`, `ref_attachment`) VALUES (?, ?)";

            // Prepare the statement
            $attachment_stmt = mysqli_prepare($con, $attachment_sql);

            // Bind the parameters with the values
            mysqli_stmt_bind_param($attachment_stmt, "ss", $newfilename, $referenceNumber);

            // Execute the statement
            if (mysqli_stmt_execute($attachment_stmt)) {
                $_SESSION['status'] = "Added Successfully.";
                $_SESSION['status_code'] = "success";
            } else {
                $_SESSION['status'] = "Error adding attachment: " . mysqli_error($con);
                $_SESSION['status_code'] = "error";
            }
            move_uploaded_file($_FILES['image']['tmp_name'][$i], "images/".$newfilename);
        }

        $_SESSION['status'] = "Added Successfully.";
        $_SESSION['status_code'] = "success";
    } else {
        $_SESSION['status'] = "Error adding issue: " . mysqli_error($con);
        $_SESSION['status_code'] = "error";
    }

    // Close the prepared statements
    mysqli_stmt_close($issues_stmt);
    mysqli_stmt_close($attachment_stmt);
}

// Close the database connection
mysqli_close($con);

// Redirect to the desired page
header('Location: index.php');
exit();
?>