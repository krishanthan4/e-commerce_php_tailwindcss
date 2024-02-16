<?php

include "../connection.php";

include "../email_files/SMTP.php";
include "../email_files/PHPMailer.php";
include "../email_files/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

if (isset($_GET["email"])) {

    $email = $_GET["email"];

    $resultSet = Database::search("SELECT * FROM `user` WHERE `email`='" . $email . "'");
    $num_rows = $resultSet->num_rows;

    if ($num_rows == 1) {

        $code = uniqid();
        Database::iud("UPDATE `user` SET `verification_code`='" . $code . "' WHERE email='" . $email . "'");

        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'id20051106@gmail.com';
        $mail->Password = 'peejpqmtzhghhqis';//peejpqmtzhghhqis
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('id20051106@gmail.com', 'Reset Password');
        $mail->addReplyTo('id20051106@gmail.com', 'Reset Password');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'eShop Forgot password Verification Code';
        $bodyContent = '<h1 style="color:green;">Your Verification Code is ' . $code . '</h1>';
        $mail->Body = $bodyContent;

        if (!$mail->send()) {
            echo ('Verification code sending failed.');
        } else {
            echo ('Success');
        }

    } else {
        echo ("Invalid Email Address.");
    }

} else {
    echo ("Please enter your Email Address in Email Field.");
}

?>