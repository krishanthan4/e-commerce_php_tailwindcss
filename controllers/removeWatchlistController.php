<?php

include "../connection2.php";

$list_id = $_GET["id"];

$wishlist_rs = Database::search("SELECT * FROM wishlist WHERE w_id=?",[$list_id]);
$wishlist_num = $wishlist_rs->num_rows;

if($wishlist_num == 0){
    echo ("Something went wrong. Please try again later.");
}else{
    $wishlist_data = $wishlist_rs->fetch_assoc();

    Database::iud("INSERT INTO recent(product_id,user_email) VALUES 
                (?,?)",[$wishlist_data["product_id"],$wishlist_data["user_email"]]);

    Database::iud("DELETE FROM wishlist WHERE w_id=?",[$list_id]);
    echo ("success");
    
}

?>