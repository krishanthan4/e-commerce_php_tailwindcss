<?php
require_once "../connection.php";

$email = $_POST["email"];


try {
    $mangeUsers_rs = Database::search("UPDATE `user` SET `status_status_id`= '2' WHERE `email`='" . $email . "'");

    echo ("success");
} catch (\Throwable $th) {

    echo ("something went wrong");

}
?>