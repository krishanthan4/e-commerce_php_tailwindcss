<?php

require_once "../connection2.php";
// verification code checking
$verification_code = $_POST["verification_code"];
$email = $_POST["email"];
if ($verification_code !== null) {

    if (isset($verification_code) && isset($email)) {
        $result = Database::search("SELECT * FROM user WHERE email=? AND verification_code=?", [$email, $verification_code]);

        if ($result->num_rows !== 0) {
            echo ("success");
        } else {
            echo ("verification code does not match");
        }

    }
} else {
    echo ("enter the verification code");
}
?>