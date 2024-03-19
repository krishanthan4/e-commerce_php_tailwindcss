<?php 
require_once "../connection2.php";
$resultArray = [];

if(isset($_POST["startPrice"]) && isset($_POST["endPrice"])){
$startPrice= intval($_POST["startPrice"]);
$endPrice= intval($_POST["endPrice"]);
// $startPrice= 2500;
// $endPrice= 5000;
$priceFilter_rs  =Database::search("SELECT * FROM `product` WHERE `price` < ? AND `price` > ? ORDER BY `price` ASC LIMIT 10",[$endPrice,$startPrice]);
}else if(isset($_POST["order"])){
    $order= $_POST["order"];
$priceFilter_rs  =Database::search("SELECT * FROM `product` ORDER BY `datetime_added` ".$order." LIMIT 10");

}else if(isset($_POST["quantity"])){
    $quantity= $_POST["quantity"];
$priceFilter_rs  =Database::search("SELECT * FROM `product` ORDER  BY `qty` ".$quantity."  LIMIT 10");

}else if(isset($_POST["condition"])){
    $condition= $_POST["condition"];
$priceFilter_rs  =Database::search("SELECT * FROM `product` WHERE `condition_condition_id`=? ORDER BY `datetime_added` LIMIT 10",[$condition]);

}else if(isset($_POST["category"])){
    $category= $_POST["category"];
$priceFilter_rs  =Database::search("SELECT * FROM `product` WHERE `category_cat_id`=? ORDER BY `datetime_added` LIMIT 10",[$category]);

}else{
    $resultArray["message"] = "error";
echo json_encode($resultArray);
}

if($priceFilter_rs->num_rows!==0){
    for ($i=0; $i < $priceFilter_rs->num_rows; $i++) { 
    $priceFilter = $priceFilter_rs->fetch_assoc();
    $priceFilterObject = new stdClass();
    
    $priceFilterObject->id = $priceFilter["id"];
    $priceFilterObject->title = $priceFilter["title"];
    $priceFilterObject->description = $priceFilter["description"];
    $priceFilterObject->price = $priceFilter["price"];
    $priceFilterObject->datetime_added = $priceFilter["datetime_added"];
    $priceFilterObject->delivery_fee_colombo = $priceFilter["delivery_fee_colombo"];
    $priceFilterObject->delivery_fee_other = $priceFilter["delivery_fee_other"];
    $priceFilterObject->category_cat_id = $priceFilter["category_cat_id"];
    $priceFilterObject->model_has_brand_id = $priceFilter["model_has_brand_id"];
    $priceFilterObject->qty = $priceFilter["qty"];
    $priceFilterObject->condition_condition_id = $priceFilter["condition_condition_id"];
    $priceFilterObject->status_status_id = $priceFilter["status_status_id"];
    $priceFilterObject->user_email = $priceFilter["user_email"];
    $resultArray[$i] =$priceFilterObject; 
    }
    $resultArray["message"] = "success";
    echo json_encode($resultArray);
}else{
    $resultArray["message"] = "nothing";
    echo json_encode($resultArray);   
}

?>