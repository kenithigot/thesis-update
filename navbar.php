 <!-- Css style -->
<?php include('des_style.php');?>

    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="script.js"></script>

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
                    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                        <a href="#" class="dropdown-item">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="ms-2">
                                    <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                    <small>15 minutes ago</small>
                                </div>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item text-center">See all message</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <span class="d-none d-lg-inline-flex">John Doe</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                        <button id="logoutButton" style="width: 160px;border: none;">Logout</button>    
                        
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
</style>

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
            // Perform logout actions here
            Swal.fire("Logged out!", "You have been logged out.", "success");
            window.location.href = "signin.php";
        }
    });
});
</script>
            </div>
        </div>           
    </div>
        </nav>
        <!-- Navbar End -->
    </div>
</div>