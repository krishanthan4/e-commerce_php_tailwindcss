<?php
include "../connection.php";

$product_id = $_GET["id"];

$product_resultSet = Database::search("SELECT * FROM product WHERE id='" . $product_id . "'");
$product_numRows = $product_resultSet->num_rows;

if ($product_numRows == 1) {

    $product_data = $product_resultSet->fetch_assoc();
    $status = $product_data["status_status_id"];

    if ($status == 1) {
        Database::iud("UPDATE product SET status_status_id='2' WHERE id='" . $product_id . "'");
        echo ("deactivated");
    } else if ($status == 2) {
        Database::iud("UPDATE product SET status_status_id='1' WHERE id='" . $product_id . "'");
        echo ("activated");
    }
} else {
    echo ("Something went wrong. Please try again later.");
}


?>