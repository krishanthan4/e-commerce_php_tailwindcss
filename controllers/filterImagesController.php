<?php 
require_once "../connection.php";

if(isset($_POST["id"])){
$id= $_POST["id"];
$resultArray = [];

$ImageFilter_rs = Database::search("SELECT * FROM `product_img` WHERE `product_id`='".$id."'");

if($ImageFilter_rs->num_rows!==0){
    $ImageFilter = $ImageFilter_rs->fetch_assoc();

    $resultArray["img_path"] =$ImageFilter["img_path"]; 

$resultArray["message"] = "success";
echo json_encode($resultArray);


}else{
$resultArray["message"] = "nothing";
echo json_encode($resultArray);   
}
}else{
$resultArray["message"] = "error";
echo json_encode($resultArray);
}

?>