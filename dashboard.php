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
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4" style="width:auto;margin:auto;margin-left:185px;">
                        <div class="ms-3">   
                            <div style="text-align:center;margin-left:-20px;">
                                <h6>Trash Bin 1</h6>
                                <h6 style="font-size:small;">Biodegradable</h6>
                            </div>
                                <div class="progress progress-bar-vertical " style="border-radius:140px;height:250px; width:250px;">
                                    <div class="progress-bar progress-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height: 60%;"></div>  
                                </div> 
                            <button id="logoutButton" style="width:110px;border:solid 2px;margin-top:15px;border-radius: 30rem;padding: 1px 20px;font-size: 18px; ">Update</button> 
                            <button id="logoutButton" style="width:110px;border:solid 2px;margin-top:15px;margin-left:25px;border-radius: 30rem;padding: 1px 20px;font-size: 18px;">Reset</button>                                     
                        </div>                
                    </div>       
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4" style="width:280px;height:400px;margin:auto;" >
                        <div class="ms-3">
                            <h6 style="margin-top:-180px; margin-left:45px;">Color Indicator</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4" style="width:auto;margin:auto;margin-right:185px;">
                        <div class="ms-3">
                            <div style="text-align:center;margin-left:-20px;">
                                <h6>Trash Bin 2</h6>
                                <h6 style="font-size:small;">Non-Biodegradable</h6>
                            </div>
                            <div class="progress progress-bar-vertical" style="border-radius:140px;height:250px; width:250px;">
                                <div class="progress-bar progress-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height: 60%;"></div>  
                            </div>
                            <button id="logoutButton" style="width:110px;border:solid 2px;margin-top:15px;border-radius: 30rem;padding: 1px 20px;font-size: 18px;">Update</button> 
                            <button id="logoutButton" style="width:110px;border:solid 2px;margin-top:15px;margin-left:25px;border-radius: 30rem;padding: 1px 20px;font-size: 18px;">Reset</button>                                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4" style="margin-left:25px;margin-right:25px">
                <h5 class="mb-1">Data Reading Log</h5>
                <div class="table-responsive">
                    <table class="table" style="text-align:center;">
                        <thead>
                            <tr>
                                <th scope="col" style="border-right:solid; color: #0f1116">Time - Date</th>
                                <th scope="col" style="border-right:solid; color: #0f1116">Biodegradable Bin</th>
                                <th scope="col" style="border-right:solid; color: #0f1116">Status</th>
                                <th scope="col" style="border-right:solid; color: #0f1116">Non-Biodegradable Bin</th>
                                <th scope="col" style="border-right:solid; color: #0f1116">Status</th>                          
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>John</td>
                                <td>Doe</td>
                                <td>jhon@email.com</td>
                                <td>USA</td>            
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>mark@email.com</td>
                                <td>UK</td>             
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>jacob@email.com</td>
                                <td>AU</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
</style>
</body>
</html>