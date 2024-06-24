<?php include('include/header.php'); ?>

<?php
// Ensure that the id parameter is set and is numeric
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = intval($_GET['id']);
    
    // Prepare the data to update
    $data = [
        'deleted_at' => date('Y-m-d H:i:s'),
        'updated_by' => 1 // Assuming 1 is the user ID of the person performing the update
    ];

    // Prepare the condition for the update
    $con = ['id' => $item_id];

    // Perform the update
    $rs = $mysqli->common_update('items', $data, $con);

    if ($rs) {
        if ($rs['data']) {
            echo "<script>window.location='{$baseurl}items_list.php'</script>";
        } else {
            echo "Error: " . $rs['error'];
        }
    } else {
        echo "An unexpected error occurred.";
    }
} else {
    echo "Invalid item ID.";
}
?>

<?php include('include/footer.php'); ?>
