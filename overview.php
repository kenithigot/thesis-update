<?php
session_start(); 
?>
<!DOCTYPE html>

<!-- Sidebar -->
<?php include('includes/sidebar.php');?>

<!-- Topbar -->
<?php include('includes/topbar.php');?>

<!-- Spinner -->
<?php include('spinner.php');?>

<head>

    <!-- Header -->
    <!--<?php include('includes/header.php');?>-->

    <title>Trash Level Monitoring - Overview</title>

    <!-- Libraries and others -->
    <?php include('resources/libraries.php');?>

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Added Style -->
    <?php include('resources/style.php');?>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

</head>

<style>
  
</style>

<body>
    <div class="content">  
        <div class="col-sm-12 col-xl-6" style="width: 100%; padding:20px; overflow: hidden;">
            <div class="bg-secondary rounded h-100 p-4" >
                <h2 class="mb-2" style="text-align:center;">Trash Level Monitoring in La Salle University</h2>
                <h5 class="mb-4" style="text-align:center;">Aguada, Ozamiz City, Misamis Occidental</h5>
                <div class="d-flex justify-content-center">
                    <div style="display: inline-flex;background-color:#298d5f;border-radius:30px;height:50px;">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active btn btn-success" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"
                                    style="width:150px;border-radius:30px;">
                                    <i class="fa-solid fa-book-open" style="width:100px;font-size:30px;"></i><br>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link btn btn-success" id="pills-about-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-about" type="button" role="tab" aria-controls="pills-about" aria-selected="false"
                                    style="width:150px;border-radius:30px;">
                                    <i class="fa-solid fa-list-check" style="width:100px;font-size:30px;"></i><br>
                                </button>
                            </li>

                            <!--<li class="nav-item" role="presentation">-->
                            <!--    <button class="nav-link btn btn-success" id="pills-document-tab" data-bs-toggle="pill"-->
                            <!--        data-bs-target="#pills-document" type="button" role="tab" aria-controls="pills-document" aria-selected="false"-->
                            <!--        style="width:150px;border-radius:30px;">-->
                            <!--        <i class="fas fa-photo-video" style="width:100px;font-size:30px;"></i><br>-->
                            <!--    </button>-->
                            <!--</li>-->

                            <li class="nav-item" role="presentation">
                                <button class="nav-link btn btn-success" id="pills-developers-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-developers" type="button" role="tab" aria-controls="pills-developers" aria-selected="false"
                                    style="width:150px;border-radius:30px;">
                                    <i class="fa-solid fa-chalkboard-user" style="width:100px;font-size:30px;"></i><br>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="row">
                            <div class="col-md-12"><br>                   
                                <h5 style="text-align:center;font-size:30px; font-family: Georgia, serif;">OVERVIEW</h5>
                            </div>
                            <div class="col-md-12 custom-div-12">
                                <p>Problem of trash has been impacted by the increase of the human population. 
                                    Trash is defined as unwanted residual material that remains after a procedure and 
                                    can harm the environment. It harms the environment and human health if garbage is 
                                    disposed carelessly or piled up without effective management.
                                </p>
                                <p>Even though the world is in a state of advancement, trash is still a problem 
                                    that must be resolved. The majority of garbage cause substantial health and
                                    environmental problems in a polluted environment.
                                </p>
                                <p>Additionally, the globe has experienced incredible technological advancement 
                                    in recent years. Thus, it is anticipated that the integration and collaboration 
                                    of information technology with socio-environmental challenges will result in output 
                                    that can address the problems that are now being experienced. To maximize management 
                                    efforts, data and information on waste management might be useful resources. Waste 
                                    management activities should be able to be monitored and appropriately controlled 
                                    with the use of information technology.             
                                </p>
                            </div>                                  
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-about" role="tabpanel" aria-labelledby="pills-about-tab">
                        <div class="row">
                            <div class="col-md-12"><br>                              
                                <h5 style="text-align:center;font-size:30px; font-family: Georgia, serif;">FEATURES</h5>
                            </div>

                            <div class="col-md-4">
                                <img class="" src="imgs/sensor.jpg" alt="" style="width: 220px; height: 160px;margin-left:30px;margin-top:20px;">
                            </div>
                            <div class="col-md-8 custom-div-6;"><br>
                                <p style="margin-top:30px;text-align:justify;font-size:20px;font-family: serif;">
                                    A device that uses ultrasonic sound waves to calculate the distance to an item. 
                                    Boundaries reflect high-frequency sound waves, creating distinctive echo patterns.
                                </p>   
                            </div>

                            <div class="col-md-8 custom-div-6;">
                                <p style="margin-top:60px;text-align:justify;font-size:20px;font-family: serif;">
                                    Arduino UNO is a microcontroller board that is used to make applications easier to access. 
                                    And open-source electronics platform based on easy-to-use hardware and software.
                                </p>   
                            </div>
                            <div class="col-md-4">
                                <img class="" src="imgs/arduino.jpg" alt="" style="width: 270px; height: 250px;margin-right:30px;margin-top:-10px;">
                            </div>
                    
                            <div class="col-md-4 custom-div-6">
                                <img class="" src="imgs/wifi-module.jpg" alt="" style="width: 250px; height: 250px;margin-left:30px;margin-top:-50px;">
                            </div>
                            <div class="col-md-8 custom-div-6">
                                <p style="margin-top:45px;text-align:justify;font-size:20px;font-family: serif;">
                                    A self-contained SOC with an integrated TCP/IP protocol stack that can give access to your 
                                    Wi-Fi network to any microcontroller. The ESP8266 is capable of offloading all Wi-Fi networking 
                                    operations from another application processor or hosting an application.
                                </p>   
                            </div>

                            <div class="col-md-8 custom-div-6;">
                                <p style="margin-top:60px;text-align:justify;font-size:20px;font-family: serif;">
                                    RBG LEDs are short for red, blue, and green LEDs. These three colors are combined 
                                    in RGB LED products to create over 16 million different shades of light.
                                </p>   
                            </div>
                            <div class="col-md-4">
                                <img class="" src="imgs/led.jpg" alt="" style="width: 250px; height: 220px;margin-right:10px;margin-top:-10px;">
                            </div>

                            <div class="col-md-4 custom-div-6">
                                <img class="" src="imgs/voltage.jpg" alt="" style="width: 250px; height: 250px;margin-left:30px;margin-top:-50px;">
                            </div>
                            <div class="col-md-8 custom-div-6">
                                <p style="margin-top:45px;text-align:justify;font-size:20px;font-family: serif;">
                                    A device that generates the proper supply voltage. Converts DC to +5 V or +12 V, 
                                    a significantly lower voltage than that needed by the component, enabling the 
                                    installation of components with various power supply voltages on the same module.
                                </p>   
                            </div>

                        </div>
                    </div>
                    <!--<div class="tab-pane fade" id="pills-document" role="tabpanel" aria-labelledby="pills-document-tab">-->
                    <!--    <div class="row">-->
                    <!--        <div class="col-md-12"><br>                   -->
                    <!--            <h5 style="text-align:center;font-size:30px; font-family: Georgia, serif;">DOCUMENTATION</h5>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <div class="tab-pane fade" id="pills-developers" role="tabpanel" aria-labelledby="pills-developers-tab">
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <h5 style="text-align:center;font-size:30px; font-family: Georgia, serif;">DEVELOPERS</h5>
                            </div>
                            <div class="col-md-6">
                                <p style="font-size:20px;text-align:center;padding-top:20px;font-family: serif;"> <strong>KENITH S. IGOT</strong></p>
                                <p style="font-size:15px;text-align:center;"> <strong>BS - Computer Engineer IV</strong><br>
                                <i class="fa-brands fa-github" style="font-size:20px;"></i>
                                    <a href="https://github.com/kenithigot" style="color:black;margin-left:5px;">kenithigot@gmail.com</a><br>
                                    <i class="fa-solid fa-phone" style="font-size:15px;margin-right:5px;"></i> +639616261000</p>
                            </div>
                            <div class="col-md-6">
                                <p style="font-size:20px;text-align:center;padding-top:20px;font-family: serif;"> <strong>ABEL S. LERIO</strong></p>
                                <p style="font-size:15px;text-align:center;"> <strong>BS - Computer Engineer IV</strong> <br> 
                                <i class="fa-brands fa-github" style="font-size:20px;"></i>
                                    <a href="https://github.com/AbelLerio31" style="color:black;margin-left:5px;">abel.lerio@gmail.com</a><br>
                                    <i class="fa-solid fa-phone" style="font-size:15px;margin-right:5px;"></i> +639639352078</p>
                            </div>
                        </div><br><br><br><br>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <?php include('includes/footer.php');?>   

    </div>
    
</body>
</html>