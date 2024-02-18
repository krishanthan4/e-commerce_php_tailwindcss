<?php

require_once "../connection.php";
// verification code checking
$verification_code = $_POST["verification_code"];
$email = $_POST["email"];
if(isset($verification_code) && isset($email)){

 $result =  Database::search("SELECT * FROM `user` WHERE `email`='".$email."' AND `verification_code`='".$verification_code."'");

    if($result->num_rows!==0){
echo("success");
    }else{
        echo("verification code does not match");
    }
}
?>