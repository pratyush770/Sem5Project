<?php
require_once 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = $_POST['product_id'];
    $newQuantity = $_POST['quantity'];

    // Update the quantity in the database
    $updateQuery = "UPDATE product SET quantity = $newQuantity WHERE pid = $productId";
    if ($con->query($updateQuery) === TRUE) {
        echo "Quantity updated successfully";
    } else {
        echo "Error updating quantity: " . $con->error;
    }
}
?>
