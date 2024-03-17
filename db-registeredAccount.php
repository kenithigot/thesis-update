<?php
include('authentication.php');

if (isset($_POST['adminId'])) {
    $adminId = $_POST['adminId'];
    $sql = "SELECT * FROM add_admin WHERE admin_id = $adminId";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        $row = mysqli_fetch_assoc($query);
        echo json_encode($row);
    } else {
        echo json_encode(['error' => 'Database query failed']);
    }
} else {
    echo json_encode(['error' => 'Invalid request']);
}
?>
