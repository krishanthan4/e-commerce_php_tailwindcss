<?php
session_start();
if (isset($_SESSION["user"])) {
    $userEmail = $_SESSION["user"]["email"];
    require_once "../connection2.php";

    if ($_POST["product_id"]) {
        try {
            $product_id = intval($_POST["product_id"]);
            $wishlist = Database::iud("DELETE  FROM wishlist WHERE product_id=? AND user_email=?", [$product_id, $userEmail]);

            echo ("success");
        } catch (\Throwable $th) {
            echo ("Something Went wrong Error");

        }

    }

}


?>