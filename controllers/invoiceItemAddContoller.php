<?php 
require_once "../connection2.php";
session_start();

if($_POST["order_id"] && $_POST["products_id"] && $_POST["products_qty"] && $_POST["amount"]){

$order_id = $_POST["order_id"];
$products_id = json_decode($_POST["products_id"]);
$products_qty = json_decode($_POST["products_qty"]);
$amount = $_POST["amount"];


$invoice_rs = Database::iud("INSERT INTO `invoice` (`order_id`,`date`,`total`,`user_email`) VALUES ('".$order_id."','". date("Y-m-d h:i:s")."','".$amount."','".$_SESSION["user"]["email"]."')");
$array = [];

try {
    
$selectInvoice_rs = Database::search("SELECT * FROM `invoice` WHERE `order_id`='".$order_id."'");
$selectInvoice = $selectInvoice_rs->fetch_assoc();

foreach ($products_id as $key => $value) {
    
    $invoice_has_products_rs = Database::iud("INSERT INTO `invoice_has_products` (`invoice_id`,`product_id`,`bought_qty`) VALUES ('".$selectInvoice["invoice_id"]."','".strval($products_id[$key])."','".strval($products_qty[$key])."')");
}
$array["order_id"]=$order_id;
$array["msg"]="success";
} catch (\Throwable $th) {
    $array["msg"]="error";
}


echo(json_encode($array));
}

?>
