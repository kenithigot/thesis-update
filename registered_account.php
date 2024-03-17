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
        height:280px;
    }

    .modal-content h1{
        text-align:center;
        padding:15px;
    }

    .header{
        display:flex;
        flex-direction:column;
        text-align:center;
    }

    .header label{
        cursor:pointer;
        /* margin:0 190px; */
        border-bottom:1px solid black;
    }

    .header img{
        width:180px;
        height:170px;
        border:1px solid black;
        padding:10px;
    }

    .header input{
        display:none;
    }

    .picImage{
        display:flex;
        flex-direction:row;
        justify-content:center;
    }

    .edit-form{
        letter-spacing:1px;
    }

    .input-form{
        display:flex;
        flex-direction:column;
        padding:5px;
        margin:10px 30px;

    }
    .input-form input{
        height:45px;
        width:auto;
        border:1px solid black;
        border-radius:5px;
        padding:10px;
    }
    .select-form{
        position:relative;
    
    }  
   
</style>

<body>
    <?php
        include('authentication.php');

        $sql = "SELECT * FROM add_admin";
        $query = mysqli_query($conn, $sql);
    ?>
    <div class="content">
        <div class="col-sm-12 col-xl-6" style="width: 100%; padding:20px;height:100%;"> 
            <div class="bg-secondary rounded h-100 p-4" style="margin-top:30px;">    
                <h3 class="pass-word">
                   Existing Users
                </h3><br>
                <div class="table-responsive" >
                    <table id="datatableid" class="table table-bordered">
                        <thead>
                            <tr style="text-align:center;font-family:Arial,sans-serif;letter-spacing:1px;">
                                <th>IMAGE</th>                   
                                <th>NAME</th>
                                <th>PHONE NUMBER</th>
                                <th>USER TYPE</th>
                                <th>ACTIONS</th>                                   
                            </tr>
                        </thead>
                        <?php
                            if ($query) {
                                foreach ($query as $row) {
                        ?>
                        <tbody style="font-size: 20px; font-family: Arial, sans-serif; letter-spacing: 1px; text-align:center;">
                            <tr>
                                <td> 
                                    <?php if (!empty($row['profilePicture'])) { ?>
                                        <img src="<?php echo $row['profilePicture']; ?>" title="<?php echo $row['profilePicture']; ?>" style="width:50px;height:50px;">
                                    <?php } else { ?>
                                        <img src="imgs/default.png" title="default.png" style="width:40px;height:40px;">
                                    <?php } ?>
                                </td>
                                <td>
                                    <?php echo $fullName = $row['firstName'] . ' ' . $row['middleName'] . ' ' . $row['lastName']; ?>
                                </td>
                                <td> 
                                    <?php echo $row['phoneNumber']; ?>
                                </td>
                                <td>
                                    <?php echo $row['user_type']; ?>
                                </td>
                                <td class="">
                                    <button style="letter-spacing: 1px;margin-right:10px;" class="btn btn-primary edit-button" data-toggle="modal" data-target="#exampleModal" data-adminid="<?php echo $row['admin_id']; ?>">Edit</button>
                                    <button style="letter-spacing: 1px; border:1px solid black;" class="btn btn-danger delete-button" data-adminid="<?php echo $row['admin_id']; ?>">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                        <?php           
                            }
                        } else {
                            echo "No Record Found";
                        }
                        ?>
                    </table>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="header"><br>
                                    <div class="picImage">                 
                                        <img id="modal-profilePicture" alt="User Profile">
                                    </div>
                                    <input type="file" id="uploadPic" required>
                                    <div>
                                        <label for="uploadPic">Edit Photo</label>
                                    </div>
                                    
                                </div>
                                <div class="edit-form">
                                    <div class="input-form">
                                        <label for="firstName">First Name:</label>
                                        <input type="text" id="modal-firstName" name="modal-firstName" required>
                                    </div>
                                    <div class="input-form">
                                        <label for="middleName">Middle Name:</label>
                                        <input type="text" id="modal-middleName" name="modal-middleName" required>
                                    </div>
                                    <div class="input-form">
                                        <label for="lastName">Last Name:</label>
                                        <input type="text" id="modal-lastName" name="modal-lastName" required>
                                    </div>
                                    <div class="input-form">
                                        <label for="modal-age">Age:</label>
                                        <input type="number" id="modal-age" name="modal-age" required>
                                    </div>
                                    <div class="input-form">
                                        <label for="modal-birthDate">BirthDate:</label>
                                        <input type="date" id="modal-birthDate" name="modal-birthDate" required>
                                    </div>
                                    <div class="select-form">
                                        <div class="input-form">
                                            <label for="gender">Gender:</label>
                                            <select id="modal-gender" name="modal-gender" required>
                                                <option value="" selected disabled> Select Gender &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ▼</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                        <div class="input-form">
                                            <label for="civilStatus">Civil Status:</label>
                                            <select id="modal-civilStatus" name="modal-civilStatus" required>
                                                <option value="" selected disabled> Select Civil Status &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ▼</option>
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                                <option value="Divorced">Divorced</option>
                                                <option value="Widowed">Widowed</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="input-form">
                                        <label for="phoneNumber">Phone Number:</label>
                                        <input type="number" id="modal-phoneNumber" name="modal-phoneNumber" required>
                                    </div>
                                    <div class="input-form">
                                        <label for="address">Address:</label>
                                        <input type="text" id="modal-address" name="modal-address" required>
                                    </div>
                                    <div class="input-form">
                                        <label for="currentAddress">Current Address:</label>
                                        <input type="text" id="modal-currentAddress" name="modal-currentAddress" required>
                                    </div>
                                    <div class="input-form">
                                        <label for="email_address">Email Address:</label>
                                        <input type="text" id="modal-email_address" name="modal-email_address" required>
                                    </div>
                                    <div class="input-form">
                                        <label for="user_type">User Type:</label>
                                        <select id="modal-user_type" name="modal-user_type" required>
                                            <option value="" selected disabled> Select User Type &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ▼</option>
                                            <option value="Admin">Admin</option>
                                            <option value="Co-Admin">Co-Admin</option>
                                        
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" id="User-update-btn">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>        
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
        $(document).ready(function () {

            $('.edit-button').click(function () {
                var adminId = $(this).data('adminid');

                $.ajax({
                    url: 'db-registeredAccount.php',
                    type: 'POST',
                    data: { adminId: adminId },
                    success: function (response) {
                        var data = JSON.parse(response);

                        // Populate the modal with data
                        $('#modal-profilePicture').attr('src', data.profilePicture);
                        $('#modal-profilePicture').attr('title', data.profilePicture);
                        $('#modal-firstName').val(data.firstName);
                        $('#modal-middleName').val(data.middleName);
                        $('#modal-lastName').val(data.lastName);
                        $('#modal-age').val(data.age);
                        $('#modal-birthDate').val(data.birthDate);
                        $('#modal-gender').val(data.gender);
                        $('#modal-civilStatus').val(data.civilStatus);
                        $('#modal-phoneNumber').val(data.phoneNumber);
                        $('#modal-address').val(data.address);
                        $('#modal-currentAddress').val(data.currentAddress);
                        $('#modal-email_address').val(data.email_address);
                        $('#modal-user_type').val(data.user_type);

                        // Store adminId as a data attribute on the Save Changes button
                        $('#User-update-btn').data('adminid', adminId);

                        // Show the modal
                        $('#exampleModal').modal('show');
                    }
                });
            });

            $('#User-update-btn').click(function () {
                var adminId = $(this).data('adminid');

                // Create a FormData object for the profile picture upload
                var profilePictureFormData = new FormData();
                profilePictureFormData.append('adminId', adminId);
                profilePictureFormData.append('profilePicture', $('#uploadPic')[0].files[0]); // Get the selected file

                // Create an object for the user data
                var userData = {
                    adminId: adminId,
                    firstName: $('#modal-firstName').val(),
                    middleName: $('#modal-middleName').val(),
                    lastName: $('#modal-lastName').val(),
                    age: $('#modal-age').val(),
                    birthDate: $('#modal-birthDate').val(),
                    gender: $('#modal-gender').val(),
                    civilStatus: $('#modal-civilStatus').val(),
                    phoneNumber: $('#modal-phoneNumber').val(),
                    address: $('#modal-address').val(),
                    currentAddress: $('#modal-currentAddress').val(),
                    email_address: $('#modal-email_address').val(),
                    user_type: $('#modal-user_type').val()
                };

                // Send profile picture upload request
                $.ajax({
                    url: 'user-profilePicture.php', // Replace with the actual URL to handle profile picture upload
                    type: 'POST',
                    data: profilePictureFormData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        // Handle the response if needed
                        console.log(response);

                        Swal.fire({
                            icon: "success",
                            title: "Successfully registered!",
                            text: "User Data Registered successfully."
                        }).then(function () {
                            // Reload the page after the Swal.fire dialog is closed
                            location.reload();
                        });
                    }
                });

                // Send user data update request
                $.ajax({
                    url: 'db-updateUser.php', // Replace with the actual URL to handle user data update
                    type: 'POST',
                    data: userData,
                    success: function (response) {
                        console.log(response);

                        Swal.fire({
                            icon: "success",
                            title: "Successfully Updated!",
                            text: "User Data Updated successfully."
                        }).then(function () {
                            // Reload the page after the Swal.fire dialog is closed
                            location.reload();
                        });
                    }
                });
            });



            $(document).ready(function () {
                // Add an event listener to the delete buttons
                $('.delete-button').click(function () {
                    var adminId = $(this).data('adminid');
                    
                    // Use SweetAlert for confirmation
                    Swal.fire({
                        title: 'Are you sure?',
                        text: 'You won\'t be able to revert this!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Send an AJAX request to delete the record
                            $.ajax({
                                url: 'db-deleteUser.php',
                                type: 'POST',
                                data: { adminId: adminId },
                                success: function (response) {
                                    // Show a SweetAlert for success
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Deleted!',
                                        text: 'The record has been deleted.',
                                        timer: 1500 // Automatically close the alert after 1.5 seconds
                                    }).then(function () {
                                        // Reload the page or update the table as needed
                                        location.reload(); // Reload the page in this example
                                    });
                                },
                                error: function (error) {
                                    console.error(error);
                                }
                            });
                        }
                    });
                });
            });

        });
    </script>

    <script>
        let profile = document.getElementById("modal-profilePicture");
        let inputProfile = document.getElementById("uploadPic");

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