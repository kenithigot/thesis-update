<?php
    include('authentication.php');

    if (isset($_POST['adminId'])) {
        $adminId = $_POST['adminId'];

        // Perform the deletion in the database using a SQL query
        $sql = "DELETE FROM add_admin WHERE admin_id = $adminId";

        $query = mysqli_query($conn, $sql);

        if ($query) {
            echo json_encode(['success' => 'Record deleted successfully']);
        } else {
            echo json_encode(['error' => 'Failed to delete record']);
        }
    } else {
        echo json_encode(['error' => 'Invalid request']);
    }
?>
