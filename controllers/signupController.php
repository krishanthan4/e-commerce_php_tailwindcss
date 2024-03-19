<?php

include "../connection2.php";

$email = $_POST["email"];
$password = $_POST["password"];
$retype_password = $_POST["retype_password"];

if (empty($email)) {
    echo ("Please Enter Your Email Address.");
} else if (!preg_match("/^[\w\.-]+@([\w-]+\.)+[\w-]{2,4}$/", $email)) {
    echo ("Invalid Email Address.");
} else if (empty($password)) {
    echo ("Please Enter Your Password");
} else if (!preg_match("/^(?=.\d)(?=.[a-z])(?=.[A-Z])(?=.[a-zA-Z]).{8,}$/", $password)) {
    echo ("Password should be a minimum of eight characters long, containing at least one letter, one number, and one special character.");
} else if (empty($retype_password)) {
    echo ("Please Retype your password");
} else if (!$password == $retype_password) {
    echo ("Password and Retype Password do not match!");
} else {
    if ($password == $retype_password) {

        if ($email !== "" && $password !== "") {
            try {

                $emailCheck = Database::search("SELECT * FROM user WHERE email=?", [$email]);
                if ($emailCheck->num_rows !== 0) {
                    echo ("already Exist");

                } else {
                    $d = new DateTime();
                    $tz = new DateTimeZone("Asia/Colombo");
                    $d->setTimezone($tz);
                    $joinedDate = $d->format("Y-m-d H:i:s");

                    $result = Database::iud("INSERT INTO eshop.user (fname,lname,email,password,mobile,joined_date,verification_code,gender_gender_id,status_status_id) 
                VALUES (NULL,NULL,?,?,NULL,?,NULL,NULL,'1');", [$email, $password, $joinedDate]);


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
}


?>