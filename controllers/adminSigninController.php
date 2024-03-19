<?php 

require_once "../connection2.php";
include "../email_files/SMTP.php";
include "../email_files/PHPMailer.php";
include "../email_files/Exception.php";
use PHPMailer\PHPMailer\PHPMailer;
$config = require_once "../config.php";


if($_POST["email"]){
$checkAdmin_rs = Database::search("SELECT * FROM `admin` WHERE `email`=? ",[$_POST["email"]]);

if($checkAdmin_rs->num_rows!==0){
    $checkAdmin = $checkAdmin_rs->fetch_assoc();
    $code = uniqid();
    Database::iud("UPDATE `admin` SET `vcode`=? WHERE email=?", [$code, $_POST["email"]]);

    $mail = new PHPMailer;
    $mail->IsSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = $config["app_email"];
    $mail->Password = $config["app_password"];//peejpqmtzhghhqis
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom($config["app_email"], 'Reset Password');
    $mail->addReplyTo($email, 'Log Into Admin Account');
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = 'Verification for Signin to Admin Account - eshop';
    $bodyContent = '<h1 style="color:black;">Your Verification Code is ' . $code . '</h1>';
    $mail->Body = $bodyContent;

    echo "success";
}
}
?>