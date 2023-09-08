<script>
    $(document).ready(function () {
        $('.editbtn').on('click', function () {
            var staffId = $(this).data('staffid');
            var fname = $(this).data('fname');
            var lname = $(this).data('lname');
            var phoneNum = $(this).data('phone_num');
            var status = $(this).data('status');

            $('#staff_id').val(staffId);
            $('#fname').val(fname);
            $('#lname').val(lname);
            $('#phone_num').val(phoneNum);
            $('#status').val(status);

            $('#editmodal').modal('show');
        });

        $('#saveBtn').on('click', function () {
            var staffId = $('#staff_id').val();
            var fname = $('#fname').val();
            var lname = $('#lname').val();
            var phoneNum = $('#phone_num').val();
            var status = $('#status').val();

            // Check if required data fields are not empty
            if (staffId && fname && lname && phoneNum && status) {
                $.ajax({
                    type: "POST",
                    url: "db_connections/update_staff.php",
                    data: $('#editForm').serialize() + '&updatedata=1',
                    success: function (response) {
                        if (response === "success") {
                            $('#editmodal').modal('hide');
                            var row = $('.editbtn[data-staffid="' + staffId + '"]').closest('tr');
                            row.find('td:eq(0)').text(fname + ' ' + lname);
                            row.find('td:eq(1)').text(phoneNum);
                            row.find('td:eq(2)').text(status);

                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Data has been successfully updated!',
                                showConfirmButton: false,
                                timer: 2000  
                            });

                            setTimeout(function () {
                                window.location.href = 'staff_table.php';
                            }, 2000); 
                        } else {
                            alert("Data Not Updated");
                        }
                    }
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please fill in all required fields.',
                });
            }
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const deleteButtons = document.querySelectorAll(".delete-btn");

        deleteButtons.forEach(button => {
            button.addEventListener("click", function () {
                
                const staffId = this.getAttribute("data-staffid");
                const fname = this.getAttribute("data-fname");
                const lname = this.getAttribute("data-lname");
                const phoneNum = this.getAttribute("data-phone_num");

                Swal.fire({
                    title: 'Are you sure?',
                    text: "Once deleted, you will not be able to recover the data!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        const xhr = new XMLHttpRequest();
                        xhr.open("POST", "db_connections/delete_staff.php", true);
                        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                        xhr.onreadystatechange = function () {
                            if (xhr.readyState === XMLHttpRequest.DONE) {
                                const response = JSON.parse(xhr.responseText);

                                if (response.status === 'success') {
                                    const row = button.closest("tr");
                                    row.remove();

                                    Swal.fire(
                                        'Deleted!',
                                        response.message,
                                        'success'
                                    );
                                } else {
                                    Swal.fire(
                                        'Error',
                                        response.message,
                                        'error'
                                    );
                                }
                            }
                        };

                        xhr.send("delete_id=" + staffId);
                    }
                });
            });
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const statusButtons = document.querySelectorAll(".send-btn");

        statusButtons.forEach(button => {
            button.addEventListener("click", function () {
                const staffId = this.getAttribute("data-staffid");

                Swal.fire({
                    title: 'Send Notification',
                    text: 'By clicking the "Send", the staff will be notified',
                    icon: 'info',
                    showCancelButton: true,
                    confirmButtonText: 'Send',
                    cancelButtonText: 'Cancel',
                    showLoaderOnConfirm: true,
                    preConfirm: () => {
                        return fetch("smsapi/index.php", {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/x-www-form-urlencoded'
                            },
                            body: `staff_id=${staffId}`
                        })
                        .then(response => {
                            if (!response.ok) {
                                throw new Error(response.statusText);
                            }
                            return response.json();
                        })
                        .catch(error => {
                            Swal.showValidationMessage(
                                `Request failed: ${error}`
                            );
                        });
                    },
                    allowOutsideClick: () => !Swal.isLoading()
                }).then(result => {
                    if (result.isConfirmed) {
                        if (result.value && result.value.status === 'success') {
                            Swal.fire(
                                'Status Updated',
                                result.value.message,
                                'success'
                            );
                        } else {
                            Swal.fire(
                                'Error',
                                'Failed to update status',
                                'error'
                            );
                        }
                    }
                });
            });
        });
    });
</script>

<script>
    function redirect() {
        var selectElement = document.getElementById("selectedbin");
        var selectedValue = selectElement.value;
        
        // You can use a switch or if-else statements to handle redirection
        switch (selectedValue) {
            case "dashboard.php":
                window.location.href = selectedValue;
                break;
            case "dashboardv2.php":
                window.location.href = selectedValue;
                break;
            case "dashboardv3.php":
                window.location.href = selectedValue;
            break;
            case "dashboardv4.php":
                window.location.href = selectedValue;
            break;
            case "dashboardv5.php":
                window.location.href = selectedValue;
            break;
            // Add cases for other options
            default:
                // Handle default behavior or show an error message
                break;
        }
    }
</script>

