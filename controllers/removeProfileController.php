<?php

require_once "../connection.php";

$email = $_POST["email"];

if(isset($email)){
  try {
    $result = Database::iud("UPDATE `profile_img` SET `path`= 'resources/new_user.png' WHERE `user_email`='".$email."'");
    echo("success");
  } catch (\Throwable $th) {
    echo ("error");
  }
}


?>