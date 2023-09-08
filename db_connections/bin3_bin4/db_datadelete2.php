<?php
    // Check if the delete button is clicked
    if (isset($_POST['delete'])) {
    // Display a confirmation dialog using SweetAlert
        echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
        echo '<script>
                swal({
                    title: "Are you sure?",
                    text: "Once deleted, data from the table cannot be recovered!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        // Delete the data from the database
                        var xhr = new XMLHttpRequest();
                        xhr.open("POST", "db_connections/bin3_bin4/delete_data2.php", true);  // PHP file or endpoint for handling the deletion
                        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                        xhr.onreadystatechange = function() {
                            if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                                swal("Success", "Data deleted successfully!", "success")
                                    .then(() => {
                                        window.location.href = "dashboardv2.php"; // Reload the page
                                    });
                            } else if (this.readyState === XMLHttpRequest.DONE && this.status !== 200) {
                                swal("Error", "Failed to delete data!", "error");
                            }
                        };
                        xhr.send();
                    } else {
                        swal("Cancelled", "Your data is safe!", "info");
                    }
                });
            </script>';
    }
?>
