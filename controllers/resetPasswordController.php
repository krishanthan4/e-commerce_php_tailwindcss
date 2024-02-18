<?php
require_once "../connection.php";

$email = $_POST["email"];
$password = $_POST["password"];
$retype_password = $_POST["retype_password"];
if($password===$retype_password){

    if(isset($email) && isset($password) && isset($retype_password)){
// update query have to insert
$request = Database::iud("UPDATE `user` SET (`password`='".$password."') WHERE `email`='".$email."'");

echo("success");
    }
}else{
    echo("passwords does not match");
}

?>