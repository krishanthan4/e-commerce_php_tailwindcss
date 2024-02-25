<?php
include "../connection.php";

$email = $_POST["email"];
$password = $_POST["password"];
$retype_password = $_POST["retype_password"];

if ($password == $retype_password) {
    if ($email !== "" && $password !== "") {
        try {
            $emailCheck = Database::search("SELECT * FROM `user` WHERE `email`='" . $email . "'");
            if ($emailCheck->num_rows !== 0) {
                echo ("already Exist");

            } else {
                $d = new DateTime();
                $tz = new DateTimeZone("Asia/Colombo");
                $d->setTimezone($tz);
                $joinedDate = $d->format("Y-m-d H:i:s");

                $result = Database::iud("INSERT INTO eshop.`user` (`fname`,`lname`,`email`,`password`,`mobile`,`joined_date`,`verification_code`,`gender_gender_id`,`status_status_id`) VALUES (NULL,NULL,'" . $email . "','" . $password . "',NULL,'" . $joinedDate . "',NULL,NULL,'1');");

                setcookie("email", $email, time() + (60 * 60 * 24 * 365));
                setcookie("password", $password, time() + (60 * 60 * 24 * 365));
                echo ("success");
            }

        } catch (\Throwable $th) {
            throw $th;
        }

    } else {
        echo ("Email and Passwords Cannot be Empty");
    }


} else {
    echo ("The Account Already Exist");
}
?>