<?php

include "../connection2.php";

if(isset($_GET["id"])){

    $cid = $_GET["id"];

    Database::iud("DELETE FROM cart WHERE cart_id=?",[$cid]);
    echo ("Removed");

}else{
    echo ("Something went wrong.");
}

?>