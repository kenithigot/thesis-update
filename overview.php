<!DOCTYPE html>

    <!-- Sidebar -->
    <?php include('bin_sidebar.php');?>

        <!-- Navigation bar -->
        <?php include('navbar.php');?>
    
            <!-- Spinner -->
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
    </head>

<body>
    <div class="content">
    <br>
    <div class="col-sm-12 col-xl-6" style="width: 100%; padding:20px; height:500px;"> <!-- Add width: 100%; to extend to the right side -->
        <div class="bg-secondary rounded h-100 p-4">
            <h2 class="mb-2" style="text-align:center;">Trash Level Monitoring in La Salle University</h2>
            <h5 class="mb-4" style="text-align:center;">Aguada, Ozamiz City, Misamis Occidental</h5>
            <br>
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" 
                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home
                    </button>
                </li>
                <!-- <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" 
                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"> Profile
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" 
                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile
                    </button>
                </li> -->
                <!-- <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Objective of the Study
                    </button>
                </li> -->
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <p style="text-align:justify;">Smart trash bin monitoring benefit the school by reducing the frequency of waste collection needed resulting in less manpower needed, emissions, and fuel use. It will also help in reducing overflowing bins and unpleasant odors in the environment. 
                </p>
                <p style="text-align:justify;">The researchers will develop two smart trash bins, which will be placed near the fitness room in La Salle University - Ozamiz, considering  its distant area around the campus. The researchers will only monitor waste levels in biodegradable and non-biodegradable trash bins. The researchers will only include an RGB LED for a color indicator of trash level. With the help of the Wifi Module which connects to the cloud server, the General Service Office (GSO) will get a notification and the sensor data transmission between the hardware and software system will be possible.
</p>
            </div>
                <!-- <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    d dolore. Amet no sed sipscing dolor et dolores et stet, tempor elitr.
                </div> -->
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class ="row">
                    <div class="col-md-12">
                        <h5 style="text-align:center;">Developers</h5>
                    </div>
                </div>
                    <div class ="row">
                        <div class="col-md-6">                    
                            <p style="font-size:20px;text-align:center;padding-top:20px;"> <strong>Kenith S. Igot</strong></p>
                            <p style="font-size:15px;text-align:center;"> BS - Computer Engineering<br> 09167767623 <br>kenith.igot@lsu.edu.ph</p>
                        </div>
                        <div class="col-md-6">                    
                            <p style="font-size:20px;text-align:center;padding-top:20px;"> <strong>Abel S. Lerio</strong></p>
                            <p style="font-size:15px;text-align:center;"> BS - Computer Engineering<br> 09639352078<br>abel.lerio@lsu.edu.ph</p>
                        </div>
                    </div>
                </div>     
                    <!-- <p style="font-size:15px;text-align:center;margin-top:10px;"> BS - Computer Engineering</p> -->
</body>
</html>