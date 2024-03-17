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
.personalInfo h1{
    position:absolute;
    font-size:18px;
    margin: 0 0 20px 20px;
    border-bottom:2px solid black;
    letter-spacing:1px;
}
.register-account{
    display:flex;
    flex-direction:row;
    margin:20px;
    font-family: "Roboto",sans-serif;
    
}

.register-input-form{
    display:flex;
    flex-direction:column;
    padding-right:25px;
    letter-spacing:1px;
}

.register-input-form input{
    width:auto;
    height:46px;
    font-size:18px;
    padding:10px;
    font-family: "Aerial",sans-serif;
    border-radius:5px;
    border:1px solid black;
}

.register-input-form input:hover{
    border:2px solid #298d5f;
}
.regBack{
    display:flex;
    flex-direction:row;
    justify-content:space-between;
    padding:20px;
}

.regBack button{
    font-size:20px;
    font-family: "Arial",sans-serif;
    letter-spacing:1px;
    padding:10px 15px;
    border-radius:10px;
    border:1px solid black;
    color:white;
}

.regBack button:hover{
    background-color: #198754;
    border:2px solid #198754;
}

.register-input-form img{
    width:190px;
    height:180px;
    padding:10px;
}

.profile-pic{
    border:1px solid black;
    border-radius:7px;
    padding:5px;
}
.profile-picture label{
    display:absolute;
    margin:10px 50px 0 50px;
    border-bottom:1px solid black;
}
.profile-picture{
    display:flex;
    flex-direction:column;
    text-align:center;
}
</style>

<body>
  
    <div class="content">
        <div class="col-sm-12 col-xl-6" style="width: 100%; padding:20px;height:100%;"> 
            <div class="bg-secondary rounded h-100 p-4" style="margin-top:30px;">    
                <h3 class="pass-word">
                   User Information
                </h3><br>
                <br>

                <?php
                    include('authentication.php');
                    $userID = $_SESSION['admin_id'];
                    $query = "SELECT * FROM add_admin WHERE admin_id = $userID";
                    $sql_run =  mysqli_query($conn, $query);

                    $user = mysqli_num_rows($sql_run) > 0;

                    if($user){
                        while($row = mysqli_fetch_assoc($sql_run)){
                ?>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-4">
                            <div class="card-body text-center" style="color:black;">
                                <img src="<?php echo $row['profilePicture']; ?>" alt="avatar"
                                class="rounded-circle img-fluid" style="width: 150px;height:150px;">
                                <h5 class="my-3"><?php echo $row['firstName'] . ' ' . $row['middleName']. ' ' . $row['lastName'];?></h5>
                                <p class="mb-1" style="font-size:18px;"><?php echo $row['phoneNumber']; ?></p>
                                <p class="mb-4" style="font-size:18px;"><?php echo $row['currentAddress']; ?></p>
                            </div>
                        </div>                     
                    </div>
                    <div class="col-lg-8">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Full Name</p>
                                    </div>
                                    <div class="col-sm-9" style="font-size:18px;">
                                        <p class="mb-0"><?php echo $row['firstName'] . ' ' . $row['middleName']. ' ' . $row['lastName'];?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Age</p>
                                    </div>
                                    <div class="col-sm-9" style="font-size:18px;">
                                        <p class="mb-0"><?php echo $row['age']; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Birth Date</p>
                                    </div>
                                    <div class="col-sm-9" style="font-size:18px;">
                                        <p class="mb-0"><?php echo $row['birthDate']; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Gender</p>
                                    </div>
                                    <div class="col-sm-9" style="font-size:18px;">
                                        <p class="mb-0"><?php echo $row['gender']; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Civil Status</p>
                                    </div>
                                    <div class="col-sm-9" style="font-size:18px;">
                                        <p class="mb-0"><?php echo $row['civilStatus']; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Phone Number</p>
                                    </div>
                                    <div class="col-sm-9" style="font-size:18px;">
                                        <p class="mb-0"><?php echo $row['phoneNumber']; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Address</p>
                                    </div>
                                    <div class="col-sm-9" style="font-size:18px;">
                                        <p class="mb-0"><?php echo $row['address']; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Current Address</p>
                                    </div>
                                    <div class="col-sm-9" style="font-size:18px;">
                                        <p class="mb-0"><?php echo $row['currentAddress']; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Email Address</p>
                                    </div>
                                    <div class="col-sm-9" style="font-size:18px;">
                                        <p class="mb-0"><?php echo $row['email_address']; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">User Type</p>
                                    </div>
                                    <div class="col-sm-9" style="font-size:18px;">
                                        <p class="mb-0"><?php echo $row['user_type']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
                <?php
                        }
                    }
                ?>
                
            </div>
        </div>
        <div class="spacing-between"></div>
        
        <!-- Footer -->
        <?php include('includes/footer.php');?> 
        </div>
    </div>
    
    <!-- button script -->
    <?php include('resources/res-script.php'); ?>

    <script>
        document.getElementById('backButton').addEventListener('click', function() {
            window.location.href = 'settings.php';
        });
    </script>

    <script>
        let profile = document.getElementById("image-pic");
        let inputProfile = document.getElementById("profilePicture");

        inputProfile.addEventListener("change", function () {
            if (inputProfile.files && inputProfile.files[0]) {
                let reader = new FileReader();

                reader.onload = function (e) {
                    profile.src = e.target.result;
                };
                reader.readAsDataURL(inputProfile.files[0]);
            }
        });
    </script>
    
</body>
</html>