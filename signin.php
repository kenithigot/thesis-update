<!DOCTYPE html>
<html lang="en">

        <!-- Db_con connection -->
        <?php include('db_signin.php'); ?>

            <!-- Loading bar -->
            <?php include('spinner.php');?>

<head>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.css">
</head>

    <body>
        <div class="container-fluid position-relative d-flex p-0" style="background-color: #298d5f;">
            <!-- Sign In Start -->
            <div class="container-fluid">
                <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                    <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                        <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3" style="height:380px">            
                            <div style="text-align:center;margin-bottom:20px;">
                                <h3>Sign In</h3>
                            </div>
                            <form action="" method="POST">
                                <div class="form-floating mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" style="font-size:20px;">
                                            <i class="fas fa-user-alt"></i>
                                        </span>
                                        <input type="email" class="form-control" id="email" placeholder="Email Address" name="email" style="padding: 15px;">
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" style="font-size:20px;">
                                            <i class="fas fa-key"></i>
                                        </span>
                                        <input type="password" class="form-control" id="password" placeholder="Password" name="password" style="padding: 15px;">
                                            <i class="password-icon" onclick="togglePasswordVisibility()" style="font-size: 30px;">&#128065;</i>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary py-3 w-100 mb-4" id="login-button" style="margin-top:30px;">Sign In</button>
                            </form>
                            <script>
                                <?php
                                    if ($loginStatus === false) {
                                        echo 'Swal.fire({
                                                icon: "error",
                                                title: "Invalid Credentials",
                                                text: "Incorrect email or password",
                                                });';
                                    }
                                ?>
                                    document.getElementById("login-button").addEventListener("click", function(event) {
                                        var email = document.getElementById("email").value;
                                        var password = document.getElementById("password").value;

                                            if (!email || !password) {
                                                event.preventDefault();
                                                Swal.fire({
                                                icon: 'error',
                                                title: 'Can\'t Login',
                                                text: 'Please fill in both email and password!',
                                                });
                                            }
                                            });

                                    function togglePasswordVisibility() {
                                        var passwordField = document.getElementById("password");
                                        var icon = document.querySelector(".password-icon");

                                            if (passwordField.type === "password") {
                                                passwordField.type = "text";
                                                icon.innerHTML = "&#128064;";
                                            } 
                                            else {
                                                passwordField.type = "password";
                                                icon.innerHTML = "&#128065;";
                                            }
                                        }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sign In End -->
        </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
<style>
    .password-icon {
      position: absolute;
      top: 50%;
      right: 10px;
      transform: translateY(-50%);
      cursor: pointer;
    }
</style>

</html>