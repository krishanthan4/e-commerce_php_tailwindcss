<?php

session_start();
include "../connection2.php";

$verifyCode = $_POST["verifyCode"];

if (empty ($verifyCode)) {
    echo ("Please enter the verification code.");
} else {
    $admin_rs = Database::search("SELECT * FROM `admin` WHERE `vcode`=?", [$verifyCode]);
    $admin_num = $admin_rs->num_rows;

    if ($admin_num == 1) {

        $admin_data = $admin_rs->fetch_assoc();
        $_SESSION["adminUserData"] = $admin_data;
        echo("success");

    } else {
        echo ("Invalid Verification Code.");
    }
}






?>