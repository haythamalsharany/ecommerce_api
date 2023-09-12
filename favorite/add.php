<?php
include "../connect.php";

$userId = filterRequest("userId");
$itemId = filterRequest("itemId");
$data = array(
    "favorite_item_id" => $itemId,
    "favorite_user_id" => $userId,

);
insertData("favorite", $data);
?>