<?php
session_start();
include "../connection2.php";

$email = $_SESSION["user"]["email"];
$pid = $_GET["id"];

$product_rs = Database::search("SELECT * FROM product WHERE id=? AND user_email=?",[$pid,$email]);
$product_num = $product_rs->num_rows;

if($product_num == 1){
    $product_data = $product_rs->fetch_assoc();
    $_SESSION["product"] = $product_data;

    echo ("Success");
}else{
    echo ("Something went wrong. Please try again later.");
}

?>