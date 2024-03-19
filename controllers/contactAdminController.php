<?php

session_start();
include "../connection2.php";
include "../email_files/SMTP.php";
include "../email_files/PHPMailer.php";
include "../email_files/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

$config = require_once "../config.php";

if (isset($_SESSION["user"])) {

    $email = $_POST["email"]; 
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $user_email = $_SESSION["user"]["email"];

    $resultSet = Database::search("SELECT email FROM admin ");
    $num_rows = $resultSet->num_rows;

    if ($num_rows == 1) {
        $data = $resultSet->fetch_assoc();
        $adminEmail = $data["email"];

        if ($user_email == $email) {
            $mail = new PHPMailer;
            $mail->IsSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = $config["app_email"];
            $mail->Password = $config["app_password"]; 
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->setFrom($user_email); 
            $mail->addReplyTo($user_email); 
            $mail->addAddress($adminEmail);
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $bodyContent = $message;
            $mail->Body = $bodyContent;

            if (!$mail->send()) {
                echo ('Your message sending failed.');
            } else {
                echo ('Success');
            }
        } else {
            echo ("Invalid User");
        }
    } else {
        echo ("Something Went Wrong.");
    }
} else {
    echo ("Please Login First");
}
?>