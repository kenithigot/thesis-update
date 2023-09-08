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
                        xhr.open("POST", "db_connections/bin7_bin8/delete_data4.php", true);  // PHP file or endpoint for handling the deletion
                        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                        xhr.onreadystatechange = function() {
                            if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                                swal("Success", "Data deleted successfully!", "success")
                                    .then(() => {
                                        setTimeout(function() {
                                            window.location.href = "dashboardv4.php"; // Reload the page after 2 seconds
                                        }, 2000); // 2000 milliseconds = 2 seconds
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
