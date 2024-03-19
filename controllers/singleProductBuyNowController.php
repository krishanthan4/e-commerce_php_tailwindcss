<?php
session_start();
require_once "../connection2.php";
$product_id = $_POST["product_id"];
$qty = $_POST["qty"];
$email = $_SESSION["user"]["email"];

if ($product_id || $qty || $email) {
    try {
        $cartCheck_rs = Database::search("SELECT * FROM cart WHERE user_email=? AND product_id=?", [$email, $product_id]);

        if ($cartCheck_rs->num_rows == 0) {
            Database::iud("INSERT INTO cart (qty,user_email,product_id) VALUES (?,?,?)",[intval($qty),$email,intval($product_id)]);

        } else {
            echo ("success");
        }
        echo ("success");

    } catch (\Throwable $th) {
        echo ("something went wrong");
    }

}


?>