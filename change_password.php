<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<!-- Sidebar -->
<?php include('includes/sidebar.php');?>

<!-- Navigation bar -->
<?php include('includes/topbar.php');?>

<!-- Spinner -->
<?php include('spinner.php');?>

<head>

    <!-- Header -->
    <?php include('includes/header.php');?>

    <title>Trash Level Monitoring - Settings</title>
    
    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Libraries and others -->
    <?php include('resources/libraries.php');?>

    <!-- Libraries and others -->
    <?php include('Resources/style.php');?>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</head>
<style>
    .spacing-between{
        height:120px;
    }

.label-password{
    margin-top:30px;
    font-size:18px;
}

.form-control{
    padding: 8px;
    border-radius:0.5rem;
    color:black;
    /*width:400px;*/
    text-align:center;
}

.button-submit{
    /*width:400px;*/
    color:black;
    padding: 8px;
}

</style>

<body>
        <?php
       include('authentication.php');
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
        
    <div class="content">
        <div class="col-sm-12 col-xl-6" style="width: 100%; padding:20px;height:100%;"> 
            <div class="bg-secondary rounded h-100 p-4" style="margin-top:30px;">    
                <h3 class="pass-word">
                   Change Password
                </h3>   
                <form action="" method="POST" style="margin-bottom:5px;">
                    <div class="container text-center">
                        <div class="form-floating mb-2">
                            <div class="label-password">
                                <label for="password">New Password</label>
                            </div>
                            <div class="input-password">              
                                <input type="password" class="form-control mx-auto" id="password" placeholder="Type Password" name="password" required>
                            </div>
                        </div>
                        <div class="form-floating mb-2">
                            <div class="label-password">
                                <label for="confirm_password">Confirm Password</label>
                            </div>
                            <div class="input-password">              
                                <input type="password" class="form-control mx-auto" id="confirm_password" placeholder="Type Password" name="confirm_password" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" style="margin-top: 30px;">Confirm Password</button>
                    </div>
                </form> <br>
            </div>
        </div>
        <div class="spacing-between"></div>
        
        <!-- Footer -->
        <?php include('includes/footer.php');?> 
        </div>
    </div>
    
    <!-- button script -->
    <?php include('resources/res-script.php'); ?>

    <!-- Add JavaScript to show SweetAlert when the password is updated -->
    <script>
        <?php if ($passwordUpdated): ?>
            Swal.fire({
                icon: 'success',
                title: 'Password Updated',
                text: 'Your password has been updated successfully.',
            });
        <?php endif; ?>

        <?php if ($passwordNotMatch): ?>
            Swal.fire({
                icon: 'error',
                title: 'Passwords Do Not Match',
                text: 'Please make sure the passwords match.',
            });
        <?php endif; ?>
    </script>

</body>
</html>