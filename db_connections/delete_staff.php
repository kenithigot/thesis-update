<?php

include('../authentication.php');

if (isset($_POST['delete_id'])) {
    $delete_id = $_POST['delete_id'];

    // Perform the actual deletion in the database
    $sql  = "DELETE FROM add_staff WHERE staff_id = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $delete_id);
    
    if ($stmt->execute()) {
        echo json_encode(array('status' => 'success', 'message' => 'Record deleted successfully.'));
    } else {
        echo json_encode(array('status' => 'error', 'message' => 'Error deleting record.'));
    }
} else {
    echo json_encode(array('status' => 'error', 'message' => 'Invalid request.'));
}

?>
