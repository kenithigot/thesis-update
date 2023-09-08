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

    <title>Trash Level Monitoring - Staff</title>
    
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

<body>

    <div class="content">
        <div class="col-sm-12 col-xl-6" style="width: 100%; padding:20px;"> 
            <div class="bg-secondary rounded h-100 p-4" style="margin-top:30px;">
                
                <!-- Modal --> 
                <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Staff Details </h5>
                            </div>

                            <form action="db_connections/insert_staff.php" method="POST">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label style="font-weight:bold;"> First Name: </label>
                                        <input type="text" name="fname" class="form-control" placeholder="Enter First Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label style="font-weight:bold;"> Last Name: </label>
                                        <input type="text" name="lname" class="form-control" placeholder="Enter Last Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label style="font-weight:bold;"> Phone Number: </label>
                                        <input type="text" name="phone_num" class="form-control" placeholder="Enter Phone Number" required>
                                    </div>
                                    <div class="form-group">
                                        <label style="font-weight:bold;"> Status: </label>
                                        <select class="form-control" name="status" required>
                                            <option value="" selected disabled >Select Status</option>
                                            <option value="ACTIVE">Active</option>
                                            <option value="NOT-ACTIVE">Not-active</option>
                                        </select> 
                                    </div>     
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="insertdata" class="btn btn-success">Save Data</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

                <!-- EDIT POP UP FORM -->
                <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">                       
                                <h5 class="modal-title" id="exampleModalLabel" style="font-size:40px;margin-left:210px;">
                                    <i class="fa fa-user"></i>
                                </h5>                    
                            </div>

                            <form id="editForm"> 
                                <div class="modal-body">
                                    <input type="hidden" name="staff_id" id="staff_id">
                                    <div class="form-group">
                                        <label> First Name: </label>
                                        <input type="text" name="fname" id="fname" class="form-control"
                                            placeholder="Enter First Name" required>
                                    </div>                          
                                    <div class="form-group">
                                        <label> Last Name </label>
                                        <input type="text" name="lname" id="lname" class="form-control"
                                            placeholder="Enter Last Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label> Phone Number</label>
                                        <input type="text" name="phone_num" id="phone_num" class="form-control"
                                            placeholder="Enter Phone Number" required>
                                    </div>
                                    <div class="form-group">
                                        <label> Status: </label>
                                        <div class="select-with-icon">
                                            <select class="form-control" name="status" id="status" required>
                                                <option value="" selected disabled>Select Status ▼</option>
                                                <option value="ACTIVE">Active</option>
                                                <option value="NOT-ACTIVE">Not-active</option>
                                            </select>
                                            <div class="select-icon">
                                                ▼
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" id="saveBtn" class="btn btn-success">Update Data</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

                <div class="staff-info-container" style="margin-bottom:20px;">
                <h2> Staff Information </h2>  
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#studentaddmodal">
                        ADD<i class="fas fa-user-plus" style="margin-left:10px;"></i>
                    </button>
                </div>

                <?php
                    include('authentication.php'); 

                    $sql = "SELECT * FROM add_staff";
                    $query = mysqli_query($conn, $sql);
                ?>

                <div class="table-responsive">
                    <table id="datatableid" class="table table-bordered" style="border-radius: 0.5rem;">
                        <thead>
                            <tr>                   
                                <th>NAME</th>
                                <th>PHONE NUMBER</th>
                                <th>STATUS</th>
                                <th>ACTIONS</th>                                 
                            </tr>
                        </thead>
                        <?php
                            if ($query) {
                                foreach ($query as $row) {
                        ?>
                        <tbody style="font-size: 20px;">
                            <tr>                
                                <td style="width: 13%;"> <?php echo $fullname = $row['fname'] .' '.$row['lname']; ?> </td>
                                <td style="width: 15%;"> <?php echo $row['phone_num']; ?> </td>
                                
                                <td style="width: 15%;">  
                                    <div class="d-flex align-items-center">
                                        <button type="button" style="margin-right: 10px;" class="btn btn-success send-btn"
                                            data-staffid="<?php echo $row['staff_id']; ?>">
                                            <i class="fas fa-bell" style="padding: 10px;"></i>
                                        </button>
                                        <?php echo $row['status']; ?>                
                                    </div>
                                </td>
                                                
                                <td style="width: 18%;">  
                                    <div class="d-flex justify-content-center">
                                        <button type="button" class="btn btn-success editbtn" style="margin-right: 10px;"
                                            data-toggle="modal" data-target="#editmodal"
                                            data-staffid="<?php echo $row['staff_id']; ?>"
                                            data-fname="<?php echo htmlspecialchars($row['fname']); ?>"
                                            data-lname="<?php echo htmlspecialchars($row['lname']); ?>"
                                            data-phone_num="<?php echo htmlspecialchars($row['phone_num']); ?>"
                                            data-status="<?php echo htmlspecialchars($row['status']); ?>">
                                            <i class="fas fa-user-edit" style="padding: 10px;"></i>
                                        </button>

                                        <button type="button" class="btn btn-danger delete-btn"
                                            data-staffid="<?php echo $row['staff_id']; ?>">
                                            <i class="fas fa-trash" style="padding: 10px;"></i>
                                        </button> 
                                    </div>
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

            </div>
        </div>

        <!-- key guides  -->
        <div class="col-sm-12 col-xl-6" style="width: 100%; padding:20px;"> 
            <div class="bg-secondary rounded h-100 p-4">
                <div class="staff-info-container">
                    <h2>Key Guidelines: </h2>  
                </div>
                <div style="display: flex; align-items: center; margin-left: 30px;">
                    <button type="button" style="margin-right: 20px;border:1px black solid;" class="btn btn-success" disabled>
                        <i class="fas fa-bell" style="padding: 7px;"></i>
                    </button>
                    <div style="margin-top:20px;margin-bottom:-10px;">
                        <h6 style="margin-right: 5px; margin-bottom: 0;">Send Notification</h6>
                        <p style="margin: 0; vertical-align: middle;">This serves as a <strong>notification</strong> that the admin will notify the other staff through phone number that the bins are ready to be collected.</p>
                        <p><strong>Note: Only ACTIVE status can receive the notification.</strong></p>
                    </div>
                </div>
                <div style="display: flex; align-items: center; margin-left: 30px; margin-top: 10px;">
                    <button type="button" style="margin-right: 20px;border:1px black solid;" class="btn btn-success" disabled>
                        <i class="fas fa-user-plus" style="padding: 7px;"></i>
                    </button>
                    <div style="margin-top:20px;">
                        <h6 style="margin-right: 10px; margin-bottom: 0;">Add Staff</h6>
                        <p style="margin: 0; vertical-align: middle;">This serves as an additional feature where the admin can <strong>add staff</strong> and simultaneously provide information for each staff member.</p>
                    </div>
                </div>
                <div style="display: flex; align-items: center; margin-left: 30px; margin-top: 10px;">
                    <button type="button" style="margin-right: 20px;border:1px black solid;" class="btn btn-success" disabled>
                        <i class="fas fa-user-edit" style="padding: 7px;"></i>
                    </button>
                    <div style="margin-top:20px;"> 
                        <h6 style="margin-bottom: 0;">Edit Staff</h6>
                        <p style="margin: 0; vertical-align: middle;">This serves as an<strong> Edit Staff</strong> feature, allowing the admin to modify staff information if required changes are needed.</p>
                    </div>
                </div>
                <div style="display: flex; align-items: center; margin-left: 30px; margin-top: 31px;">
                    <button type="button" style="margin-right: 24px;border:1px black solid;" class="btn btn-danger" disabled>
                        <i class="fas fa-trash" style="padding: 7px;"></i>
                    </button>
                    <div>
                        <h6 style="margin-bottom: 0;">Delete Staff</h6>
                        <p style="margin: 0; vertical-align: middle;">This serves as a <strong>Delete Staff</strong> feature, enabling the admin to remove a specific staff member if necessary.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <?php include('includes/footer.php');?> 

    </div>

    <!-- button script -->
    <?php include('resources/res-script.php'); ?>

</body>
</html>