<?php

include "../connection2.php";

if (isset($_GET["qty"]) & isset($_GET["id"])) {

    $qty = $_GET["qty"];
    $cid = $_GET["id"];

    Database::iud("UPDATE cart SET qty='? WHERE cart_id=?", [$qty, $cid]);
    echo ("Updated");

} else {
    echo ("Something went wrong.");
}

?>