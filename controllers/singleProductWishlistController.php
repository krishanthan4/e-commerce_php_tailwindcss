<?php
session_start();
if (isset($_SESSION["user"])) {
    $userEmail = $_SESSION["user"]["email"];
    require_once "../connection2.php";

    if ($_POST["product_id"] && $_POST["qty"]) {
        try {
            $product_id = intval($_POST["product_id"]);
            $qty = intval($_POST["qty"]);
            $wishlist = Database::iud("INSERT INTO wishlist (user_email,product_id,qty) VALUES (?,?,?)", [$userEmail, $product_id, $qty]);

            echo ("success");
        } catch (\Throwable $th) {
            echo ("Something Went wrong Error");

        }

    }

}


?>