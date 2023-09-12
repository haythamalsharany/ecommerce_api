<?php
include "../connect.php";

$userId = filterRequest("userId");
$itemId = filterRequest("itemId");

deleteData("favorite", "favorite_user_id= $userId AND favorite_item_id= $itemId",);
?>