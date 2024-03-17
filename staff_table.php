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
<meta charset ="UTF-8">

<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="Hello" />
<meta name="author" content="" />
<link rel="icon" type="image/png" href="imgs/lasalle.png">

<title>Trash Level Monitoring</title>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/chart/chart.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Sweet alert script -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>

<link rel="stylesheet" href="path/to/bootstrap.min.css">
<script src="path/to/jquery.min.js"></script>
<script src="path/to/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>

</head>

<style>
.staff-info-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

#datatableid {
    color: black;
}

.form-group{
    margin-bottom:20px;
}

select {
    appearance: none; 
    background-color: #f2f2f2;
    border: 1px solid #000;
    border-radius: 5px;
    padding: 10px;
    width: 200px;
    font-size: 16px;
    color: #333;
    outline: none; 
    cursor: pointer;
}

select option {
    background-color: white;
    color: #333;
}

select option:checked {
    background-color: #007bff;
    color: white;
}
.select-with-icon {
    position: relative;
}

.select-icon {
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    pointer-events: none;
}
</style>

<body>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>

<div class="content">
    <div class="col-sm-12 col-xl-6" style="width: 100%; padding:20px;"> <!-- Add width: 100%; to extend to the right side -->
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
                                            ▼ <!-- You can replace this with an SVG icon if you prefer -->
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
    <div class="col-sm-12 col-xl-6" style="width: 100%; padding:20px;"> <!-- Add width: 100%; to extend to the right side -->
        <div class="bg-secondary rounded h-100 p-4">
            <div class="staff-info-container">
                <h2>Key Guidelines: </h2>  
            </div>
            <div style="display: flex; align-items: center; margin-left: 30px;">
                <button type="button" style="margin-right: 20px;" class="btn btn-success">
                    <i class="fas fa-bell" style="padding: 7px;"></i>
                </button>
                <div style="margin-top:20px;margin-bottom:-10px;">
                    <h6 style="margin-right: 5px; margin-bottom: 0;">Send Notification</h6>
                    <p style="margin: 0; vertical-align: middle;">This serves as a <strong>notification</strong> that the admin will notify the other staff through phone number that the bins are ready to be collected.</p>
                    <p><strong>Note: Only ACTIVE status can receive the notification.</strong></p>
                </div>
            </div>
            <div style="display: flex; align-items: center; margin-left: 30px; margin-top: 10px;">
                <button type="button" style="margin-right: 20px;" class="btn btn-success">
                    <i class="fas fa-user-plus" style="padding: 7px;"></i>
                </button>
                <div style="margin-top:20px;">
                    <h6 style="margin-right: 10px; margin-bottom: 0;">Add Staff</h6>
                    <p style="margin: 0; vertical-align: middle;">This serves as an additional feature where the admin can add staff and simultaneously provide information for each staff member.</p>
                </div>
            </div>
            <div style="display: flex; align-items: center; margin-left: 30px; margin-top: 10px;">
                <button type="button" style="margin-right: 20px;" class="btn btn-success">
                    <i class="fas fa-user-edit" style="padding: 7px;"></i>
                </button>
                <div style="margin-top:20px;"> 
                    <h6 style="margin-bottom: 0;">Edit Staff</h6>
                    <p style="margin: 0; vertical-align: middle;">This serves as an<strong> Edit Staff</strong> feature, allowing the admin to modify staff information if required changes are needed.</p>
                </div>
            </div>
            <div style="display: flex; align-items: center; margin-left: 30px; margin-top: 31px;">
                <button type="button" style="margin-right: 24px;" class="btn btn-danger">
                    <i class="fas fa-trash" style="padding: 7px;"></i>
                </button>
                <div>
                    <h6 style="margin-bottom: 0;">Delete Staff</h6>
                    <p style="margin: 0; vertical-align: middle;">This serves as a <strong>Delete Staff</strong> feature, enabling the admin to remove a specific staff member if necessary.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('.editbtn').on('click', function () {
            var staffId = $(this).data('staffid');
            var fname = $(this).data('fname');
            var lname = $(this).data('lname');
            var phoneNum = $(this).data('phone_num');
            var status = $(this).data('status');

            $('#staff_id').val(staffId);
            $('#fname').val(fname);
            $('#lname').val(lname);
            $('#phone_num').val(phoneNum);
            $('#status').val(status);

            $('#editmodal').modal('show');
        });

        $('#saveBtn').on('click', function () {
            var staffId = $('#staff_id').val();
            var fname = $('#fname').val();
            var lname = $('#lname').val();
            var phoneNum = $('#phone_num').val();
            var status = $('#status').val();

            // Check if required data fields are not empty
            if (staffId && fname && lname && phoneNum && status) {
                $.ajax({
                    type: "POST",
                    url: "db_connections/update_staff.php",
                    data: $('#editForm').serialize() + '&updatedata=1',
                    success: function (response) {
                        if (response === "success") {
                            $('#editmodal').modal('hide');
                            var row = $('.editbtn[data-staffid="' + staffId + '"]').closest('tr');
                            row.find('td:eq(0)').text(fname + ' ' + lname);
                            row.find('td:eq(1)').text(phoneNum);
                            row.find('td:eq(2)').text(status);

                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Data has been successfully updated!',
                                showConfirmButton: false,
                                timer: 2000  
                            });

                            setTimeout(function () {
                                window.location.href = 'staff_table.php';
                            }, 2000); 
                        } else {
                            alert("Data Not Updated");
                        }
                    }
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please fill in all required fields.',
                });
            }
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const deleteButtons = document.querySelectorAll(".delete-btn");

        deleteButtons.forEach(button => {
            button.addEventListener("click", function () {
                
                const staffId = this.getAttribute("data-staffid");
                const fname = this.getAttribute("data-fname");
                const lname = this.getAttribute("data-lname");
                const phoneNum = this.getAttribute("data-phone_num");

                Swal.fire({
                    title: 'Are you sure?',
                    text: "Once deleted, you will not be able to recover the data!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        const xhr = new XMLHttpRequest();
                        xhr.open("POST", "db_connections/delete_staff.php", true);
                        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                        xhr.onreadystatechange = function () {
                            if (xhr.readyState === XMLHttpRequest.DONE) {
                                const response = JSON.parse(xhr.responseText);

                                if (response.status === 'success') {
                                    const row = button.closest("tr");
                                    row.remove();

                                    Swal.fire(
                                        'Deleted!',
                                        response.message,
                                        'success'
                                    );
                                } else {
                                    Swal.fire(
                                        'Error',
                                        response.message,
                                        'error'
                                    );
                                }
                            }
                        };

                        xhr.send("delete_id=" + staffId);
                    }
                });
            });
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const statusButtons = document.querySelectorAll(".send-btn");

        statusButtons.forEach(button => {
            button.addEventListener("click", function () {
                const staffId = this.getAttribute("data-staffid");

                const swalOptions = {
                    title: 'Send Notification',
                    text: 'By clicking the "Send", the staff will be notified',
                    icon: 'info',
                    showCancelButton: true,
                    confirmButtonText: 'Send',
                    cancelButtonText: 'Cancel',
                    showLoaderOnConfirm: true,
                    preConfirm: () => {
                        // This is where you send an API request to notify the staff member.
                        // If the request is successful, it resolves with a success status.
                        // If it fails, it rejects with an error message.
                        return fetch("smsapi/index.php", {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/x-www-form-urlencoded'
                            },
                            body: `staff_id=${staffId}`
                        })
                        .then(response => {
                            if (!response.ok) {
                                throw new Error(response.statusText);
                            }
                            return response.json();
                        })
                        .catch(error => {
                            // If there's an error in the API request, it will be caught here.
                            Swal.showValidationMessage(
                                `Request failed: ${error}`
                            );
                        });
                    },
                    allowOutsideClick: () => !Swal.isLoading(),
                    timer: 5000, // Set the timer to 10 seconds (10000 milliseconds)
                    timerProgressBar: false // Show a progress bar for the timer
                };

                Swal.fire(swalOptions).then(result => {
                    // This block executes after the Swal (SweetAlert) dialog is closed.
                    if (result.isConfirmed) {
                        if (result.value && result.value.status === 'success') {
                            // If the API request was successful, show a success message.
                            Swal.fire(
                                'Status Updated',
                                result.value.message,
                                'success'
                            );
                            // Redirect to the same page after a 5-second delay
                            setTimeout(() => {
                                window.location.href = window.location.href;
                            }, 5000);
                        } else {
                            // If the API request failed, show an error message.
                            Swal.fire(
                                'Error',
                                'Failed to update status',
                                'error'
                            );
                        }
                    }
                });
            });
        });
    });
</script>


</body>
</html>