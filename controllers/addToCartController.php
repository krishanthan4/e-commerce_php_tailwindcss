<?php

session_start();
include "../connection.php";

if (isset($_SESSION["user"])) {
    if (isset($_POST["id"])) {
        $email = $_SESSION["user"]["email"];
        $pid = $_POST["id"];
        $qty = $_POST["qty"];

        $cart_rs = Database::search("SELECT * FROM cart  WHERE user_email='" . $email . "' AND product_id='" . $pid . "' ");
        $cart_num = $cart_rs->num_rows;

        if ($cart_num == 1) {
            $cart_data = $cart_rs->fetch_assoc();
            $cart_id = $cart_data["cart_id"];

            Database::iud("DELETE FROM  cart WHERE cart_id='" . $cart_id . "'");
            echo ("removed");
        } else {
            Database::iud("INSERT INTO cart (qty,user_email,product_id) VALUES ('".$qty."','" . $email . "','" . $pid . "')");
            echo ("added");
        }
    } else {
        echo ("Something went wrong. Please try again later.");
    }

} else {
    echo ("Please Login First.");
}

?>