
<!-- Customized Bootstrap Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="css/style.css" rel="stylesheet">

<!-- JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" charset="utf8"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>

<style>
    #logoutButton {
    background-color: transparent;
    color: black;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    }

    #logoutButton:hover {
    background-color: #d32f2f;
    }
    .content .navbar .sidebar-toggler{
        border-radius:10px;
    }
    
    .settings {
    background-color: transparent;
    color: black;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    }

    .settings:hover {
    background-color: #d32f2f;
    }

</style>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <div class="content" style="min-height:40px;">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="dashboard.php" class="navbar-brand d-flex d-lg-none me-4">
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">          
                    <div class="nav-item dropdown">
                        <?php
                            include('authentication.php');
                            $userID = $_SESSION['admin_id'];
                            $query = "SELECT * FROM add_admin WHERE admin_id = $userID";
                            $sql_run =  mysqli_query($conn, $query);

                            $user = mysqli_num_rows($sql_run) > 0;

                            if($user){
                                while($row = mysqli_fetch_assoc($sql_run)){
                        ?>
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">              
                            <img class="rounded-circle me-lg-2" src="<?php echo $row['profilePicture']; ?>" alt="" style="width: 45px; height: 45px;border:1px solid green;">
                            <span class="d-none d-lg-inline-flex" style="color:black;font-family:Open Sans;font-size:18px;"><?php echo $row['lastName']; ?> </span>
                        <?php
                                }
                            }
                        ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-2 rounded-0 rounded-bottom m-0">
                            <button class="settings" style="width: 150px;border: none;margin-bottom:25px;" onclick="settingsPage()">
                                <span class="fa-solid fa-gear" style="margin-right:30px;"></span>Settings
                            </button>
                            
                            <button id="logoutButton" style="width: 150px;border: none;">
                                <span class="fas fa-sign-out-alt" style="margin-right:30px;"></span>Logout
                            </button>                            
                        </div>
                    </div>           
                </div>
            </nav>
            <!-- Navbar End -->
        </div>
    </div>
</body>

<script>
    function preventBack(){
        window.history.forward()
    };
        setTimeout("preventBack()", 0);
            window.onunload = function(){
            null;
        } 
</script>

<script>
    document.getElementById("logoutButton").addEventListener("click", function() {
        Swal.fire({
            title: "Logout",
            text: "Are you sure you want to logout?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, logout!"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire("Logged out!", "You have been logged out.", "success");

                setTimeout(function() {
                    window.location.href = "https://trashlevelmonitoring.shop/";
                }, 2000);
            }
        });
    });
</script>

<script>
  function settingsPage() {
    var newPageUrl = "settings.php";

    setTimeout(function () {
      window.location.href = newPageUrl;
    }, 1000);
  }
</script>
