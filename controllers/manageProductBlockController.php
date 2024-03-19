<?php 

if(isset($_POST["product_id"]) && isset($_POST["active"])){

$product_id = intval($_POST["product_id"]);
$active = intval($_POST["active"]);
require_once "../connection.php";

    Database::search("UPDATE `product` SET `status_status_id`='".$active."' WHERE `id`='".$product_id."' ");
echo("success");
}else{
echo("error");

}


?>