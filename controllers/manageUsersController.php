<?php 

if(isset($_POST["user_email"]) && isset($_POST["active"])){

$user_email = $_POST["user_email"];
$active = intval($_POST["active"]);
require_once "../connection.php";

    Database::search("UPDATE `user` SET `status_status_id`='".$active."' WHERE `email`='".$user_email."' ");
echo("success");
}else{
echo("error");

}


?>