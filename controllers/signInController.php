<?php
session_start();
include "../connection.php";

$email = $_POST["email"];
$password = $_POST["password"];
$rememberMe = $_POST["rememberMe"];

if (empty($email)) {
    echo ("Please Enter Your Email Address.");
} else if (empty($password)) {
    echo ("Please Enter Your Password.");
} else {


    $resultSet = Database::search("SELECT * FROM user WHERE email='" . $email . "' AND password='" . $password . "'");
    $num_rows = $resultSet->num_rows;

    if ($num_rows == 1) {

        echo ("success");
        $data = $resultSet->fetch_assoc();

        $_SESSION["user"] = $data;

        if ($rememberMe == "true") {

            setcookie("email", $email, time() + (60 * 60 * 24 * 365));
            setcookie("password", $password, time() + (60 * 60 * 24 * 365));

        } else {

            setcookie("email", "", -1);
            setcookie("password", "", -1);

        }

    } else {
        echo ("Invalid Username or Password.");
    }

}




?>