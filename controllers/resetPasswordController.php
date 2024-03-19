<?php
require_once "../connection2.php";

$email = $_POST["email"];
$password = $_POST["password"];
$retype_password = $_POST["retype_password"];
if ($password === $retype_password) {

    if (isset($email) && isset($password) && isset($retype_password)) {
        // update query have to insert
        $request = Database::iud("UPDATE user SET password=? WHERE email=?", [$password, $email]);

        echo ("success");
    }
} else {
    echo ("passwords does not match");
}


?>