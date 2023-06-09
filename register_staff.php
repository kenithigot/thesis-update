<!DOCTYPE html>
<html lang="en">

        <!-- Db_con connection -->
        <?php include('db_signin.php'); ?>

            <?php include('sidebar.php');?>
            <?php include('navbar.php');?>
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

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

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
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
</head>
<body>
     <div class="content">
        <div class="container ">
            <h3 class="panton-rust">Staff Registration</h3>
            <h4></h4>
          <form action="register.php" method="POST">
              <div class="form-row">
                <div class="form-group">
                  <label class="form-name" for="first-name">First Name:</label>
                  <input type="text" id="first-name" name="first-name" required>
                </div>
                <div class="form-group">
                  <label for="last-name">Last Name:</label>
                  <input type="text" id="last-name" name="last-name" required>
                </div>
              </div>
              <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                  <div class="password-input">
                    <input type="password" id="password" name="password" required>
                    <button type="button" class="toggle-password" onclick="togglePasswordVisibility()">
                      <i class="fas fa-eye"></i></button>
                      <script>
                        function togglePasswordVisibility() {
                          var passwordInput = document.getElementById("password");
                          var toggleButton = document.querySelector(".toggle-password");

                          if (passwordInput.type === "password") {
                            passwordInput.type = "text";
                            toggleButton.innerHTML = '<i class="fas fa-eye-slash"></i>';
                          } else {
                            passwordInput.type = "password";
                            toggleButton.innerHTML = '<i class="fas fa-eye"></i>';
                          }
                        }
                      </script>
                  </div>
              </div>
                  <div class="form-group text-center">
                  <button type="submit" class="btn btn-primary py-3 w-50 mb-2" id="register-button" style="margin-top:20px;">Register</button>
                </div>
          </form>
              <style>
              body {
                font-family: Arial, sans-serif;
                background-color: #f1f1f1;
              }
              .content {
                      height: 20vh;
                  }
              .container {
                width: 500px;
                margin: 0 auto;
                padding: 90px;
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 1);
                background-image: url('file.jpg');
                background-size: cover;
                background-position: center;
              }
              .container h3 {
                text-align: center;
                margin-bottom: 30px;
              }
              .container h4 {
                text-align: center;
                margin-bottom: 30px;
              }
              .form-group {
                margin-bottom: 30px;
              }
              .form-group label {
                display: block;
                font-weight: bold;
                margin-bottom: 3px;
              }
              .form-group input[type="text"],
              .form-group input[type="email"],
              .form-group input[type="password"] {
                width: 105%;
                padding: 6px;
                font-size: 16px;
                border-radius: 3px;
                border: 2px solid #ccc;
                box-sizing: border-box;
              }
              .form-group.text-center {
                text-align: center;
              }
              .panton-rust {
                font-family: 'Panton Rust', sans-serif;
                color: yellowgreen;
              }
              .form-group input[type="submit"] {
                background-color: #4CAF50;
                color: white;
                cursor: pointer;
              }
              .form-group input[type="submit"]:hover {
                background-color: #45a049;
              }
              .password-input {
                position: relative;
              }
              .password-input .toggle-password {
                position: absolute;
                right: 0px;
                top: 50%;
                transform: translateY(-50%);
                padding: 0px;
                background-color: transparent;
                border: none;
                cursor: pointer;
              }
              .form-row {
                display: flex;
              }
              .form-group {
                flex: 20;
                margin-right: 10px;
              }
              .form-group:last-child {
                margin-right: 0;
              }
            </style>
            </div>
        </div>
        
        <script src="" async defer></script>
    </body>
</html>