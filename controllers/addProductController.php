<?php

session_start();
include "../connection.php";

$email = $_SESSION["user"]["email"];

$category = $_POST["category"];
$brand = $_POST["brand"];
$model = $_POST["model"];
$title = $_POST["title"];
$condition = $_POST["condition"];
$color = $_POST["color"];
$quantity = $_POST["quantity"];
$cost = $_POST["cost"];
$deliveryColombo = $_POST["deliveryColombo"];
$deliveryOther = $_POST["deliveryOther"];
$description = $_POST["description"];

if (empty($category) || $category == 0) {
    echo ("Please select a product category.");
} else if (empty($brand) || $brand == 0) {
    echo ("Please select a product brand.");
} else if (empty($title)) {
    echo ("Please enter a product title.");
} else if (empty($model) || $model == 0) {
    echo ("Please select a product model.");
} else if (empty($condition)) {
    echo ("Please select a product condition.");
} else if (empty($color) || $color == 0) {
    echo ("Please select a product color.");
} else if (!is_numeric($quantity) || $quantity <= 0) {
    echo ("Please enter a valid product quantity.");
} else if (!is_numeric($cost) || $cost <= 0) {
    echo ("Please enter a valid cost per item.");
} else if (!is_numeric($deliveryColombo) || $deliveryColombo < 0) {
    echo ("Please enter a valid delivery cost within Colombo.");
} else if (!is_numeric($deliveryOther) || $deliveryOther < 0) {
    echo ("Please enter a valid delivery cost out of Colombo.");
} else if (empty($description)) {
    echo ("Please enter a product description.");
} else {

    $mhb_rs = Database::search("SELECT * FROM model_has_brand WHERE model_model_id='" . $model . "' AND 
    brand_brand_id='" . $brand . "'");

    $model_has_brand_id;

    if ($mhb_rs->num_rows > 0) {

        $mhb_data = $mhb_rs->fetch_assoc();
        $model_has_brand_id = $mhb_data["id"];

    } else {

        Database::iud("INSERT INTO model_has_brand(model_model_id,brand_brand_id) VALUES 
        ('" . $model . "','" . $brand . "')");
        $model_has_brand_id = Database::$connection->insert_id;

    }

    $d = new DateTime();
    $tz = new DateTimeZone("Asia/Colombo");
    $d->setTimezone($tz);
    $date = $d->format("Y-m-d H:i:s");

    $status = 1;

    Database::iud("INSERT INTO product(price,qty,description,title,datetime_added,delivery_fee_colombo,
    delivery_fee_other,category_cat_id,model_has_brand_id,condition_condition_id,status_status_id,
    user_email) VALUES ('" . $cost . "','" . $quantity . "','" . $description . "','" . $title . "','" . $date . "','" . $deliveryColombo . "','" . $deliveryOther . "',
    '" . $category . "','" . $model_has_brand_id . "','" . $condition . "','" . $status . "','" . $email . "')");

    $product_id = Database::$connection->insert_id;

    $length = sizeof($_FILES);

    if ($length <= 3 && $length > 0) {

        $allowed_image_extensions = array("image/jpeg", "image/png", "image/svg+xml");

        for ($x = 0; $x < $length; $x++) {
            if (isset($_FILES["image" . $x])) {

                $image_file = $_FILES["image" . $x];
                $file_extension = $image_file["type"];

                if (in_array($file_extension, $allowed_image_extensions)) {

                    $new_img_extension;

                    if ($file_extension == "image/jpeg") {
                        $new_img_extension = ".jpeg";
                    } else if ($file_extension == "image/png") {
                        $new_img_extension = ".png";
                    } else if ($file_extension == "image/svg+xml") {
                        $new_img_extension = ".svg";
                    }

                    $file_name = "../public/images/product_images/" . $title . "" . $x . "" . uniqid() . $new_img_extension;
                    move_uploaded_file($image_file["tmp_name"], $file_name);

                    Database::iud("INSERT INTO product_img(img_path,product_id) VALUES 
                ('" . $file_name . "','" . $product_id . "')");

                } else {
                    echo ("Inavid image type.");
                }

            }
        }

        echo ("success");

    } else {
        echo ("Add Atleast 1 Image of the Product");
    }

}
?>