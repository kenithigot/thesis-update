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
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <!-- <img src="lasalle.png" alt="Image 2" style="height: 150px;"> -->
                            <img class="rounded-circle me-lg-2" src="imgs/user.png" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">GSO </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-2 rounded-0 rounded-bottom m-0">
                            <button id="logoutButton" style="width: 150px;border: none;"><span class="fas fa-sign-out-alt" style="margin-right:30px;"></span>Logout</button>                            
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
                    window.location.href = "http://localhost/clone/index.php";
                }, 2000);
            }
        });
    });
</script>
