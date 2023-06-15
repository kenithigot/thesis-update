<!DOCTYPE html>

    <!-- Sidebar -->
    <?php include('sidebar.php');?>

        <!-- Navigation bar -->
        <?php include('navbar.php');?>

            <!-- Loading bar -->
            <?php include('spinner.php');?>


<html>
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
        
        <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>

   

    
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </head>
<body>

    <div class="content">
    <br>
    <h1 class="mb-4" style="text-align:center;">Trash Level Monitoring</h1> <!-- Display total sale at the top -->
        <div class="container-fluid pt-6 px-4">
            <div class="row g-4">
                <div class="col-sm-6 col-xl-4">  
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4" style="width:430px;border-radius:45px;margin-left:auto;">
                        <div class="ms-3">   
                            <div style="text-align:center;">
                                <h4>Trash Bin 1</h4>
                                <h6 style="margin-top:-7px;margin-bottom:20px;">[ Biodegradable ]</h6>
                            </div>
                            <div class="progress-container" style="width:350px;">
                                <div class="progress progress-bar-vertical " style="border-radius:140px;height:220px; width:220px;">
                                    <div class="progress-bar progress-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height: 60%;"></div>  
                                </div>
                                <div class="heading-container">
                                    <h5 style="margin-left:14px;">Status</h5>
                                    <button class="custom-button" style="margin-left:15px; width:70px; height:70px;border-radius:0.5rem;"></button> 
                                </div>
                            </div>
                            <button id="logoutButton" style="width:105px;border:solid 2px;margin-top:20px;border-radius: 30rem;padding: 1px 20px;font-size:18px;margin-left:49px; ">Update</button> 
                            <button id="logoutButton" style="width:105px;border:solid 2px;margin-top:20px;margin-left:25px;border-radius:30rem;padding:1px 20px;font-size:18px;">Reset</button>                                     
                        </div>                
                    </div>       
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4" style="width:280px;height:400px;margin:auto;border-radius:2.5rem;" >
                        <div class="ms-3">
                                <h4 style="margin-top:-180px; margin-left:23px;">Color Indicator</h4>                         
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4"  style="width:430px;border-radius:45px;margin-right:auto;">
                        <div class="ms-3">
                            <div style="text-align:center;">
                                <h4>Trash Bin 2</h4>
                                <h6 style="margin-top:-7px;margin-bottom:20px;">[ Non-Biodegradable ]</h6>
                            </div>
                            <div class="progress-container" style="width:350px;">
                            <div class="progress progress-bar-vertical" style="border-radius:140px;height:220px; width:220px;">
                                <div class="progress-bar progress-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height: 60%;"></div>  
                            </div>
                            <div class="heading-container">
                                    <h5 style="margin-left:14px;">Status</h5>
                                    <button class="custom-button" style="margin-left:15px; width:70px; height:70px;border-radius:0.5rem;"></button> 
                                </div>
                            </div>
                            <button id="logoutButton" style="width:105px;border:solid 2px;margin-top:20px;border-radius:30rem;padding:1px 20px;font-size:18px;margin-left:49px;">Update</button> 
                            <button id="logoutButton" style="width:105px;border:solid 2px;margin-top:20px;margin-left:25px;border-radius:30rem;padding:1px 20px;font-size:18px;">Reset</button>                                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div style="margin-left:25px;margin-right:25px;">
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr style="text-align:center;">
                    <th >Time</th>
                    <th>Date</th>
                    <th>Biodegradable Bin</th>
                    <th>Status</th>
                    <th>Time</th>
                    <th>Date</th>
                    <th>Non-Biodegradable Bin</th>
                    <th>Status</th>
                </tr>
            </thead>
            <script>
        $(document).ready(function () {
	        $('#example').DataTable({
		        ajax: 'db_dashboard.php',
                columns: [
                    { data: 'time_bin_1' },
                    { data: 'date_bin_1' },
                    { data: 'bio_bin_1' },
                    { data: 'status_bin_1' },
                    { data: 'time_bin_2' },
                    { data: 'date_bin_2' },
                    { data: 'nonbio_bin2' },
                    { data: 'status_bin_2' }
                    ]
	        });
        });
	</script>
        </table>     
        </div>
        <!-- Footer Start -->
        <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">HTML Codex</a>, All right Reserved.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By: <a href="https://github.com/kenithigot">Kenith S. Igot</a> & <br><a href="https://htmlcodex.com">Abel S. Lerio</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
    </div>

<style>
.progress-bar-vertical {
  width: 20px;
  min-height: 200px;
  margin-right: 20px;
  background: #d0cece;
  display: -webkit-box;  
  display: -ms-flexbox;  
  display: -webkit-flex; 
  display: flex;        
  align-items: flex-end;
  -webkit-align-items: flex-end;
  border: solid 2px;
}

.progress-bar-vertical .progress-bar {
    width: 100%;
      height: 0;
      transition: height 0.6s ease;
}

.progress-striped {
      background-color: #ee5f5b;
      background-image: linear-gradient(0deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    }

@media (max-width: 768px) {
.progress-bar-vertical {
min-height: 150px;
margin-right: 10px;
    }

.progress-bar-vertical .progress-bar {
transition: height 0.4s ease;
    }
}

@media (max-width: 576px) {
.progress-bar-vertical {
min-height: 100px;
margin-right: 5px;
    }

.progress-bar-vertical .progress-bar {
transition: height 0.3s ease;
    }
}
.custom-button {
  margin-top: 10px;
  /* Additional button styles */
}

.progress-container {
  display: flex;
  align-items: center;
  justify-content: center;
}
.heading-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin-bottom: 10px;
}
.dataTables_wrapper {
    background-color:white;
    padding:10px;
    border-radius:0.5rem;
}

</style>

</body>
  
</html>