<?php

include "../connect.php";

$catId = filterRequest("catId");
// getAllData("itemsview", "categories_id = $categoryid");

$userid = filterRequest("usersid");



$stmt = $con->prepare("SELECT itemsview.* , 1 as favorite , (items_price - (items_price * items_discount / 100 ))  as itemspricedisount  FROM itemsview 
INNER JOIN favorite ON favorite.favorite_item_id = itemsview.items_id AND favorite.favorite_user_id = $userid
WHERE categories_id = $catId
UNION ALL 
SELECT *  , 0 as favorite  , (items_price - (items_price * items_discount / 100 ))  as itemspricedisount  FROM itemsview
WHERE  categories_id = $catId AND items_id NOT IN  ( SELECT itemsview.items_id FROM itemsview 
INNER JOIN favorite ON favorite.favorite_item_id = itemsview.items_id AND favorite.favorite_user_id =  $userid  )");

$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
$count  = $stmt->rowCount();

if ($count > 0) {
    echo json_encode(array("status" => "success", "data" => $data));
} else {
    echo json_encode(array("status" => "failure"));
}


?>