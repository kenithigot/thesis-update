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

@media only screen and (max-width: 600px) {
    .register-account {
        flex-direction: column;
        margin: 10px;
    }

    .register-input-form {
        padding-right: 0;
    }

    .regBack {
        flex-direction: column;
    }

    .regBack button {
        margin-bottom: 10px;
    }
}

</style>

<body>
    <?php
        include('authentication.php');

        if (isset($_POST['uploadData'])) {

            $user_type = $_POST["user_type"];
            $first_Name = $_POST["first_Name"];
            $middle_Name = $_POST["middle_Name"];
            $last_Name = $_POST["last_Name"];
            $Age = $_POST["Age"];
            $birth_Date = $_POST["birth_Date"];
            $Gender = $_POST["Gender"];
            $civil_Status = $_POST["civil_Status"];
            $phone_Number = $_POST["phone_Number"];
            $Address = $_POST["Address"];
            $current_Address = $_POST["current_Address"];
            $email_address = $_POST["email_address"];
            $Password = $_POST["Password"];

            // Handle profile picture upload
            $profilePicturePath = '';

            if ($_FILES['profilePicture']['error'] == UPLOAD_ERR_OK) {
                $uploadDir = 'imgs/users/'; // Create a directory for profile pictures
                $uploadFile = $uploadDir . basename($_FILES['profilePicture']['name']);

                if (move_uploaded_file($_FILES['profilePicture']['tmp_name'], $uploadFile)) {
                    $profilePicturePath = $uploadFile;
                } else {
                    echo '<script> Swal.fire({
                        icon: "error",
                        title: "Profile Picture Not Uploaded!",
                        text: "There was an error uploading the profile picture."
                    }); </script>';
                }
            }

            // Hash the password
            $hashedPassword = password_hash($Password, PASSWORD_BCRYPT);

            // Check if the database connection is valid
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Use prepared statements to prevent SQL injection
            $stmt = $conn->prepare("INSERT INTO add_admin (`user_type`,`firstName`, `middleName`, `lastName`, `age`, `birthDate`, `gender`, `civilStatus`, `phoneNumber`, `address`, `currentAddress`, `email_address`, `password`, `profilePicture`) VALUES (?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

            // Check if the statement was prepared successfully
            if (!$stmt) {
                die("Error in prepare statement: " . $conn->error);
            }

            $stmt->bind_param("ssssssssssssss", $user_type, $first_Name, $middle_Name, $last_Name, $Age, $birth_Date, $Gender, $civil_Status, $phone_Number, $Address, $current_Address, $email_address, $hashedPassword, $profilePicturePath);

            // Execute the statement
            if ($stmt->execute()) {
                echo '<script> Swal.fire({
                    icon: "success",
                    title: "Successfully registered!",
                    text: "User Data Registered successfully."
                }); </script>';
            } else {
                echo '<script> Swal.fire({
                    icon: "error",
                    title: "User Data Not Registered!",
                    text: "Please check the data of the user."
                }); </script>';
            }

            // Close the prepared statement
            $stmt->close();
        }

        // Close the database connection
        $conn->close();
    ?>

        
    <div class="content">
        <div class="col-sm-12 col-xl-6" style="width: 100%; padding:20px;height:100%;"> 
            <div class="bg-secondary rounded h-100 p-4" style="margin-top:30px;">    
                <h3 class="pass-word">
                   Register an Account
                </h3><br>
                <div class="personalInfo">
                    <h1>Personal Information</h1>
                </div><br>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="register-account" >
                        <div class="register-input-form">
                            <label for="first_Name">First Name:</label>
                            <input type="text" id="first_Name" name="first_Name" required>
                        </div>
                        <div class="register-input-form">
                            <label for="middle_Name">Middle Name:</label>
                            <input type="text" id="middle_Name" name="middle_Name" required>
                        </div>
                        <div class="register-input-form">
                            <label for="last_Name">Last Name:</label>
                            <input type="text" id="last_Name" name="last_Name" required>
                        </div>
                    </div>

                    <div class="register-account">
                        <div class="register-input-form">
                            <label for="Age">Age:</label>
                            <input type="number" id="Age" name="Age" required>
                        </div>
                        <div class="register-input-form">
                            <label for="birth_Date">Birthdate:</label>
                            <input type="date" id="birth_Date" name="birth_Date" required>
                        </div>
                        <div class="register-input-form">
                            <label for="Gender">Gender:</label>
                            <select id="Gender" name="Gender" required>
                                <option value="" selected disabled> Select Gender &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ▼</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="register-input-form">
                            <label for="civil_Status">Civil Status:</label>
                            <select id="civil_Status" name="civil_Status" required>
                                <option value="" selected disabled> Select Civil Status &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ▼</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Divorced">Divorced</option>
                                <option value="Widowed">Widowed</option>
                            </select>
                        </div>
                    </div><br>

                    <div class="personalInfo">
                        <h1>Contact Information</h1>
                    </div><br>
                    <div class="register-account">
                        <div class="register-input-form">
                            <label for="phoneNumber">Phone Number:</label>
                            <input type="number" id="phone_Number" name="phone_Number" required>
                        </div>
                        <div class="register-input-form">
                            <label for="Address">Address:</label>
                            <input type="text" id="Address" name="Address" required>
                        </div>
                        <div class="register-input-form">
                            <label for="current_Address">Current Address:</label>
                            <input type="text" id="current_Address "name="current_Address" required>
                        </div>
                    </div><br>

                    <div class="personalInfo">
                        <h1>Login Information</h1>
                    </div><br>
                    <div class="register-account">
                        <div class="register-input-form">
                            <label for="email_address">Email Address:</label>
                            <input type="text" id="email_address" name="email_address" required>
                            <br>
                            <label for="user_type">User Type:</label>
                            <select id="user_type" name="user_type" required>
                                <option value="" selected disabled>Select User Type &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ▼</option>
                                <option value="Admin">Admin</option>
                                <option value="Co-Admin">Co-Admin</option>
                            </select>
                        </div>
                        <div class="register-input-form">
                            <label for="">Password:</label>
                            <input type="password" id="Password" name="Password" required>
                        </div>
                        <div class="register-input-form">
                            <label for="">Profile Picture:</label>
                            <input type="file" id="profilePicture" name="profilePicture" style="display:none;" required>
                            <div class="profile-picture">
                                <div class="profile-pic">
                                    <img src="imgs/default.png" alt="Profile Picture" id="image-pic">
                                </div>
                                <label for="profilePicture">Upload Image</label>
                            </div>
                        </div>
                    </div><br><br><br><br><br>

                    <div class="regBack">
                        <button id="backButton" style="background-color:#6E7D88;">Back</button>
                        <button name="uploadData" style="background-color:#198754">Submit</button>
                    </div>
                </form>
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