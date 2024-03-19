<?php

if ($_GET["query"]) {
    $query = $_GET["query"];
    require_once "../connection2.php";

    $search_rs = Database::search("SELECT DISTINCT id,price,qty,description,title,user_email FROM product INNER JOIN category ON product.category_cat_id=category.cat_id WHERE title LIKE ? OR cat_name LIKE ? AND status_status_id='1' LIMIT 6",["%$query%","%$query%"]);

    $searchResultArray = [];

    if ($search_rs->num_rows !== 0) {
        $searchResultArray["msg"] = "success";
        for ($i = 0; $i < $search_rs->num_rows; $i++) {
            $search = $search_rs->fetch_assoc();
            $searchResultObject = new stdClass();
            $searchResultObject->title = $search["title"];
            $searchResultArray[$i] = $searchResultObject;
        }
    } else {
        $searchResultArray["msg"] = "error";
    }
} else {
    $searchResultArray["msg"] = "error";
}
echo (json_encode($searchResultArray));
?>