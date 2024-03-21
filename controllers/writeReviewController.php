<?php 
require_once "../connection2.php";
session_start();
if(isset($_POST["stars"]) && isset($_POST["feed"]) && isset($_POST["product_id"])){
  $currentDate = date('Y-m-d H:i:s');
  
    $writeReview_rs = Database::iud("INSERT INTO `feedback` (`stars`,`date`,`feed`,`product_id`,`user_email`) VALUES (?,?,?,?,?)",[$_POST["stars"],$currentDate,$_POST["feed"],intval($_POST["product_id"]),$_SESSION["user"]["email"]]);
echo "success";

}else{
echo "error";
}


?>