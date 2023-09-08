<?php session_start(); ?>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        <?php
        if (isset($_SESSION['login_success']) && $_SESSION['login_success']) {
            unset($_SESSION['login_success']); 
        ?>
         Swal.fire({
            icon: 'success',
            title: 'Hello Admin, Welcome back!',
        });
        <?php
        }
        ?>
    });
</script>