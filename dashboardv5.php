<!DOCTYPE html>
<html lang="en">

<!-- Sidebar -->
<?php include('includes/sidebar.php'); ?>

<!-- Navigation bar -->
<?php include('includes/topbar.php');?>

<!-- Loading bar -->
<?php include('spinner.php');?>

<!-- Db_datadelete connection -->
<?php include('db_connections/bin9_bin10/db_datadelete5.php'); ?>

<!-- Db_status connection -->
<?php include('db_connections/bin9_bin10/db_status5.php'); ?>
                       
<head>

    <!-- Header -->
    <?php include('includes/header.php');?>

    <title>Trash Level Monitoring - Dashboard</title>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Libraries -->
    <?php include('resources/libraries.php');?>

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- dashboard-style -->
    <?php include('resources/dashboard-style.php');?>

    <script>
        function updateProgressBars() {
            $.ajax({
                url: 'db_connections/bin9_bin10/get_bin_data5.php',
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    
                    // Update progress bars with new percentages
                    $('#progress-bar1').css('height', data.percentage1 + '%');
                    $('#progress-bar2').css('height', data.percentage2 + '%');
          
                    // Update progress texts
                    $('#progress-text1').text(data.percentage1 + '%');
                    $('#progress-text2').text(data.percentage2 + '%');
                },
                
                error: function (xhr, status, error) {
                    console.error('Error fetching progress data:', error);
                }
            });
        }
        updateProgressBars();
    
        // Refresh the progress bars 
        setInterval(updateProgressBars, 1000);
    </script>

    <script>
        function refreshButtonColors() {
            $.ajax({
                url: 'db_connections/bin9_bin10/get_button_colors5.php',
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    
                    $('.custom-button1').css('background', data.bin1ButtonColor);
                    $('.custom-button2').css('background', data.bin2ButtonColor);

                    $('#progress-bar1').css('background', data.bin1ButtonColor);
                    $('#progress-bar2').css('background', data.bin2ButtonColor);
                },
                error: function (error) {
                    console.log('Error:', error);
                }
            });
        }

        // Refresh button colors 
        setInterval(refreshButtonColors, 10000);
    </script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</head>

<body >
    <div class="content">
        <h1 class="mb-4" style="text-align:center;padding-top:10px;">Trash Level Monitoring</h1>

        <?php
            include('authentication.php');

            $query = "SELECT location5 FROM thesis_data5";
            $result = $conn->query($query);

            if ($result && $result->num_rows > 0) { 
                $row = $result->fetch_assoc();
                $location5 = $row['location5'];
            } else {
                $location5 = "Add Location"; 
            }
            $conn->close();
        ?>

        <h3 class="mb-5" style="text-align: center; padding-top: 10px; margin: 0; position: relative;">
            Location: &nbsp;&nbsp;<u id="displayedLocation"><?php echo $location5; ?></u>
            <button class="location-btn" data-toggle="modal" data-target="#editmodal">
                <i class="bi bi-pencil-square btnicon"></i>
            </button>
        </h3>

        <!-- Modal for Edit Location -->
        <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">                       
                        <h5 class="modal-title" id="exampleModalLabel" style="font-size:40px;margin-left:210px;">
                            <i class="bi bi-geo-alt-fill"></i>
                        </h5>                    
                    </div>

                    <form id="editForm"> 
                        <div class="modal-body">               
                            <div class="form-group">
                                <label> Location: </label>
                                <input type="text" name="location5" id="location5" class="form-control"
                                    placeholder="Type the Location" required>
                            </div>                          
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="savelocationbtn" class="btn btn-success">Update</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <!-- Split dropup button -->
        <div class="dropdown-dash">
            <select name="selectedbin" id="selectedbin" class="select-success" onchange="redirect()">
                <option value=""selected disabled>Select Bin Here</option>
                <option value="dashboard.php">Trash Bin 1 and 2</option>
                <option value="dashboardv2.php">Trash Bin 3 and 4</option>
                <option value="dashboardv3.php">Trash Bin 5 and 6</option>
                <option value="dashboardv4.php">Trash Bin 7 and 8</option>
                <option value="dashboardv5.php">Trash Bin 9 and 10</option>
            </select>
        </div>

        <div class="container-fluid pt-6 px-4" style="margin-top:35px;">
            <div class="row g-4" style="margin-top:-40px;">
                
                <div class="col-sm-6 col-lg-4" >
                    <div class="bg-secondary rounded d-flex flex-column align-items-center justify-content-between p-4" style="max-width:430px; margin: 0 auto;border-radius: 0.5rem;background-color:gray;">
                        <div class="ms-3">
                            <div class="text-center">
                                <h4>Trash Bin 9</h4>
                                <h6 style="margin-top:-7px;margin-bottom:20px;">[ Biodegradable ]</h6>
                            </div>
                            <div class="progress-container" style="width: 100%;">
                                <div class="progress progress-bar-vertical" style="height: 220px;
                                        max-width: 220px;
                                        width: 200px;
                                        position: relative;
                                        border-width: 0 10px 30px 10px;
                                        border-style: solid;
                                        border-color: transparent transparent transparent transparent;
                                        border-radius: 5% 5% 35% 35%;
                                        border: 2px solid black;">
                                    <div class="progress-bar progress-striped1" id="progress-bar1" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" aria-label="Progress:" style="height:;"></div>
                                    <span class="progress-text" id="progress-text1"></span>
                                </div>
                                <div class="heading-container">
                                    <h5>Status</h5>
                                    <button class="custom-button1" style="width: 55px; height: 55px; border-radius: 50%; margin-left: 1px; border: 2px solid #000;" disabled></button>
                                </div>
                            </div>
                        </div>
                    </div>             
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="bg-secondary rounded d-flex flex-column align-items-center justify-content-start p-4" style="width:280px;height:350px;margin:auto;border-radius:2.5rem; margin-top:25px;">
                        <h4 class="text-center">Color Indicator</h4>
                        <div class="mt-2 d-flex align-items-start justify-content-start">
                            <div class="square-green" style="border: solid; height: 30px; width: 30px; background-color: #48b314; margin-right: 10px;"></div>
                            <h5 class="mt-1">EMPTY</h5>
                        </div>
                        <p class="text-center mt-2">Height of the trash is <strong> < 15 cm</strong></p>
                        <div class="mb-1 d-flex align-items-start justify-content-start">
                            <div class="square-orange" style="border: solid; height: 30px; width: 30px; background-color: #fdb81c; margin-right: 10px;"></div>
                            <h5 class="mt-1">HALF-FULL</h5>
                        </div>
                        <p class="text-center">Height of the trash is <strong> >= 15 cm</strong> and <strong><=</strong> to <strong>36 cm</strong></p>    
                        <div class="mb-1 d-flex align-items-start justify-content-start">
                            <div class="square-red" style="border: solid; height: 30px; width: 30px; background-color: #fd100f; margin-right: 10px;"></div>           
                            <h5 class="mt-1">FULL</h5>
                        </div>
                        <p class="text-center">Height of the trash is <strong> > 36 cm</strong></p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="bg-secondary rounded d-flex flex-column align-items-center justify-content-between p-4" style="max-width:430px; margin: 0 auto; border-radius: 0.5rem;">
                        <div class="ms-3">
                            <div class="text-center">
                                <h4>Trash Bin 10</h4>
                                <h6 style="margin-top:-7px;margin-bottom:20px;">[ Non-Biodegradable ]</h6>
                            </div>
                            <div class="progress-container" style="width: 100%;">
                                <div class="progress progress-bar-vertical" style="height: 220px;
                                        max-width: 220px;
                                        width: 200px;
                                        position: relative;
                                        border-width: 0 10px 30px 10px;
                                        border-style: solid;
                                        border-color: transparent transparent transparent transparent;
                                        border-radius: 5% 5% 35% 35%;
                                        border: 2px solid black;">
                                    <div class="progress-bar progress-striped2" id="progress-bar2" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" aria-label="Progress:" style="height:;"></div>
                                    <span class="progress-text" id="progress-text2"></span>
                                </div>
                                <div class="heading-container">
                                    <h5>Status</h5>
                                    <button class="custom-button2" style="width: 55px; height: 55px; border-radius: 50%; margin-left: 1px; border: 2px solid #000;" disabled></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div style="margin-left: 25px; margin-right: 25px; text-align: center; margin-top:-20px;"> 
                <div class="containertab">
                    <div class="trash-table">
                        <h3>Trash Bin 9</h3>
                    </div>
                    <div class="btn-containertab">
                        <form action="" method="POST">
                            <button type="submit" name="delete" class="btn btn-primary mt-4" style="padding:5px 10px;border-radius: 0.5rem; font-size: 16px; color: black; margin-bottom: 10px; background-color: white;">Delete Data</button>
                        </form>
                    </div>
                </div>
                <table id="trash-bin1" class="display" style="width:100%">
                    <thead>
                        <tr style="text-align:center;">
                            <th>Date</th>
                            <th>Time</th>
                            <th>Trash Type</th>
                            <th>Trash Level (cm)</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <script>
                        $(document).ready(function () {
                            var table = $('#trash-bin1').DataTable({
                                ajax: 'db_connections/bin9_bin10/db_dashboardv5.php',
                                columns: [
                                    { data: 'timestamp_date'},
                                    { data: 'timestamp_time'},
                                    { data: 'trash_type1'},
                                    { data: 'bin9'},
                                    { data: 'status9'},
                                ],
                                columnDefs: [
                                    { className: 'dt-center', targets: '_all' }
                                ],
                                dom: 'lBfrtip',
                                buttons: [
                                    'copy', 'csv', 'pdf'
                                ],
                                order: [[0, 'desc']]
                            });

                            setInterval(function () {
                                table.ajax.reload(null, false);
                            }, 1000);
                        });
                    </script>
                </table><br>
                
                <div class="trash-table"><h3>Trash Bin 10</h3></div>            
                <table id="trash-bin2" class="display" style="width:100%">
                    <thead>
                        <tr style="text-align:center;">
                            <th>Date</th>
                            <th>Time</th>
                            <th>Trash Type</th>
                            <th>Trash Level (cm)</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <script>
                        $(document).ready(function () {
                            var table = $('#trash-bin2').DataTable({
                                ajax: 'db_connections/bin9_bin10/db_dashboardv5.php',
                                columns: [
                                    { data: 'timestamp_date'},
                                    { data: 'timestamp_time'},
                                    { data: 'trash_type2'},
                                    { data: 'bin10'},
                                    { data: 'status10'},
                                ],
                                columnDefs: [
                                    { className: 'dt-center', targets: '_all' }
                                ],
                                dom: 'lBfrtip',
                                buttons: [
                                    'copy', 'csv', 'pdf'
                                ],
                                order: [[0, 'desc']]
                            });

                            setInterval(function () {
                                table.ajax.reload(null, false);
                            }, 1000);
                        });
                    </script>
                </table>
            </div>
        </div><br>

        <!-- Footer -->
        <?php include('includes/footer.php');?>    

    </div> 

    <!-- Script -->
    <?php include('resources/res-script.php');?>

</body>

<script>
    $(document).ready(function () {
        $('.location-btn').on('click', function () {
            var location = $('#displayedLocation').text();
            $('#location5').val(location);
            $('#editmodal').modal('show');
        });

        $('#savelocationbtn').on('click', function () {
            var newLocation = $('#location5').val();

            if (newLocation) {
                $.ajax({
                    type: "POST",
                    url: "db_connections/bin9_bin8=10/db_location5.php",
                    data: $('#editForm').serialize(),
                    success: function (response) {
                        if (response.trim() === "success") {
                            // Update displayed location after successful database update
                            $('#displayedLocation').text(newLocation);

                            $('#editmodal').modal('hide');

                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Location has been successfully updated!',
                                showConfirmButton: false,
                                timer: 2000
                            }).then(function () {
                                // Redirect to the same page after success message
                                window.location.href = window.location.href;
                            });
                        } else {
                            alert("Location Not Updated");
                        }
                    }
                });
            } else {
                alert("Please fill in the new location.");
            }
        });
    });
</script>

</html>

