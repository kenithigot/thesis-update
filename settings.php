<?php
session_start();

// Initialize $isAdmin and $isCoAdmin with false
$isAdmin = false;
$isCoAdmin = false;

// Check if the user is logged in and their user type
if (isset($_SESSION['login_success']) && $_SESSION['login_success'] && isset($_SESSION['user_type'])) {
    if ($_SESSION['user_type'] == "Admin") {
        $isAdmin = true;
    } elseif ($_SESSION['user_type'] == "Co-Admin") {
        $isCoAdmin = true;
    }
}
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
    height:330px;
  }
  
  .settings-block{
    display:flex;
    flex-direction:column;
    width:240px;
    margin:0;
    padding:0;
}

.icon-size{
    font-size:25px;
}

.block-a{
    font-family: "Arial",sans-serif;
    letter-spacing:1px;
    color:black;
    font-size:16px;
    margin:8px 15px;
}

.settings-block i{
    padding-right:5px;
}
</style>
<body>

    <div class="content">
        <div class="col-sm-12 col-xl-6" style="width: 100%; padding:20px;height:100%;"> 
            <div class="bg-secondary rounded h-100 p-4" style="margin-top:30px;">    
                <h3>
                    Account Settings
                </h3>
                <div class="settings-block">
                    <a href="user_information.php" class="block-a">
                        <i class="fa-solid fa-circle-user me-3 icon-size"></i>Account Information
                    </a>
                    <a href="change_password.php" class="block-a">
                        <i class="fa-solid fa-lock me-3 icon-size"></i>Change Password
                    </a>
                    <?php if ($_SESSION['user_type'] == "Admin") { ?>
                        <a href="user_register.php" class="block-a">
                            <i class="fa fa-user-plus me-2 icon-size"></i>Add User
                        </a>
                        <a href="registered_account.php" class="block-a">
                            <i class="fa fa-users me-2 icon-size"></i>Existing Users
                        </a>
                    <?php } ?>
                </div><br>
            </div>
        </div>
        <div class="spacing-between"> </div>
        <!-- Footer -->
        <?php include('includes/footer.php');?> 

    </div>
  
    <!-- button script -->
    <?php include('resources/res-script.php'); ?>

</body>
</html>