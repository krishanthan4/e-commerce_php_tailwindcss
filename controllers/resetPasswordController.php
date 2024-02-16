<?php

include "../connection.php";

$email = $_POST["email"];
$newpw = $_POST["newPassword"];
$retypepw = $_POST["retypePassword"];
$vcode = $_POST["verification"];

if (empty($newpw)) {
    echo ("Please enter your new password!.");
} else if (empty($retypepw)) {
    echo ("Please Re-type your password!.");
} else if ($newpw != $retypepw) {
    echo ("Password does not match.");
} else if (empty($vcode)) {
    echo ("Please enter your verification code.");
} else {

    $resultSet = Database::search("SELECT * FROM `user` WHERE `email`='" . $email . "' AND `verification_code`='" . $vcode . "'");
    $num_rows = $resultSet->num_rows;

    if ($num_rows == 1) {

        Database::iud("UPDATE `user` SET `password`='" . $retypepw . "' WHERE `email`='" . $email . "'");
        echo ("success");

    } else {
        echo ("Invalid Email Address or Verification Code");
    }

}

?>