<?php

include "../connection2.php";

include "../email_files/SMTP.php";
include "../email_files/PHPMailer.php";
include "../email_files/Exception.php";

$config = require_once "../config.php";


use PHPMailer\PHPMailer\PHPMailer;

$email = $_POST["adminEmail"];

if (empty($email)) {
    echo ("Email field should not be empty.");
} else {
    $admin_rs = Database::search("SELECT * FROM `admin` WHERE `email`=?",[$email]);
    $admin_num = $admin_rs->num_rows;

    if ($admin_num > 0) {

        $code = uniqid();

        Database::iud("UPDATE `admin` SET `vcode`=? WHERE `email`=? ",[$code, $email]);

        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = $config["app_email"];
        $mail->Password = $config["app_password"];
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom($config["app_email"], 'Admin Verification');
        $mail->addReplyTo($email, 'Admin Verification');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'eShop Admin Login Verification Code';
        $bodyContent = '<h1>Your Verification Code is ' . $code . '</h1>';
        $mail->Body = $bodyContent;

        if (!$mail->send()) {
            echo ("Verification code sending failed.");
        } else {
            echo ("success");
        }

    } else {
        echo ("You are not a valid user.");
    }
}

    

 

?>