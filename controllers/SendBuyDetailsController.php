<?php 
require_once "../connection.php";
require_once "../function.php";
$config = require_once "../config.php";

session_start();
$order_id = uniqid();
$merchant_id =  $config["PAYHERE_ID"]; 
$merchant_secret =  $config["PAYHERE_SECRET_KEY"];
$currency = 'LKR';

if(isset($_POST["products_id"]) || isset($_POST["products_qty"]) && isset($_SESSION["user"])){
$products_id = json_decode($_POST["products_id"]);
$products_qty = json_decode($_POST["products_qty"]);
// $products_id = [1, 2, 3];
// $products_qty = [1, 2, 3];
    $user_email = $_SESSION["user"]["email"];

    // Fetch user address from the database
    $user_rs = Database::search("SELECT * FROM `user_has_address` INNER JOIN `city` ON `city`.`city_id`=`user_has_address`.`city_city_id` INNER JOIN `district` ON `district`.`district_id`=`city`.`district_district_id` WHERE `user_email`='$user_email'");
    $user = $user_rs->fetch_assoc();

    $totalAmount = 0;
    $delivery = 0;
    $address = "";

    // Loop through each product
    foreach ($products_id as $key => $product_id) { 
        $product_qty = $products_qty[$key]; 
        // Fetch product data from the database
        $product_rs = Database::search("SELECT * FROM `product` WHERE `id`='".$products_id[$key]."'");
        $product_data = $product_rs->fetch_assoc();

        // Determine delivery fee based on user's district
        if($user["district_name"] == "Colombo") {
            $delivery += $product_data["delivery_fee_colombo"];
        } else {
            $delivery += $product_data["delivery_fee_other"];
        }
    
        // Calculate total amount for the order (for this product only)
        $totalAmount += (intval($product_data["price"]) * intval($product_qty));
    }
    $totalAmount += $delivery;
    // Construct address string
    $address = $user["line1"] . ", " . $user["line2"] . ", " . $user["city_name"] . ", " . $user["district_name"];

    // Generate hash for payment
    $hash = strtoupper(md5(
        $merchant_id . 
        $order_id . 
        number_format($totalAmount, 2, '.', '') . 
        $currency .  
        strtoupper(md5($merchant_secret))
    ));

    // Construct array with order details
    $array["msg"]="success";
    $array['id'] = $order_id;
    $array['amount'] = $totalAmount;
    $array['address'] = $address;
    $array['city'] = $user["city_name"];
    $array['umail'] = $user_email;
    $array['mid'] = $merchant_id;
    $array['msecret'] = $merchant_secret;
    $array['currency'] = $currency;
    $array['hash'] = $hash;
    $array['delivery'] = $delivery;
    $array['items'] = $products_id;
    $array['qty'] = $products_qty;

    // Debugging - dump product data
    echo(json_encode($array));
}
?>