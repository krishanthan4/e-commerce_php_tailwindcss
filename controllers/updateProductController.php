<?php

session_start();
include "../connection2.php";

class ProductManager
{
    public static function updateProductDetails($pid, $title, $qty, $dwc, $doc, $desc)
    {

        Database::iud("UPDATE product SET title=?, qty=?, delivery_fee_colombo=?, delivery_fee_other=?, description=? WHERE id=?", [$title, $qty, $dwc, $doc, $desc, $pid]);
        echo "Product has been updated.";
    }

    public static function updateProductImages($pid, $title)
    {
        $length = count($_FILES);
        if ($length <= 3 && $length > 0) {
            $allowed_image_extensions = array("image/jpeg", "image/png", "image/svg+xml");

            $img_rs = Database::search("SELECT * FROM product_img WHERE product_id=?", [$pid]);
            $img_num = $img_rs->num_rows;

            for ($y = 0; $y < $img_num; $y++) {
                $img_data = $img_rs->fetch_assoc();

                unlink($img_data["img_path"]);
                Database::iud("DELETE FROM product_img WHERE product_id=?",[$pid]);
            }

            for ($x = 0; $x < $length; $x++) {
                if (isset($_FILES["image$x"])) {
                    $image_file = $_FILES["image$x"];
                    $file_extension = $image_file["type"];

                    if (in_array($file_extension, $allowed_image_extensions)) {
                        $new_img_extension = pathinfo($image_file['name'], PATHINFO_EXTENSION);
                        $file_name = "../public/images/product_images/$title" . "$x" . uniqid() . ".$new_img_extension";
                        move_uploaded_file($image_file["tmp_name"], $file_name);

                        Database::iud("INSERT INTO product_img(img_path,product_id) VALUES (?,?)",[$file_name,$pid]);
                    } else {
                        echo "Invalid image type.";
                    }
                }
            }
        } else {
            echo "Invalid Image Count.";
        }
    }
}

if (isset($_SESSION["product"])) {
    $pid = $_SESSION["product"]["id"];
    $title = $_POST["title"];
    $qty = $_POST["quantity"];
    $dwc = $_POST["deliveryColombo"];
    $doc = $_POST["deliveryOther"];
    $desc = trim($_POST["description"]);


    ProductManager::updateProductDetails($pid, $title, $qty, $dwc, $doc, $desc);


    ProductManager::updateProductImages($pid, $title);
}

?>