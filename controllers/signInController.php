<?php 
include "../connection.php";

$signIn_email = $_POST["signIn_email"];
$signIn_password= $_POST["signIn_password"];

$signin =new Database();
$signin->search("SELECT * FROM `user` WHERE `email`='".$signIn_email."' AND `password`='".$signIn_password."'");



?>