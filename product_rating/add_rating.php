<?php
include "../connect.php";
$userId = filterRequest("userId");
$itemId = filterRequest("itemId");
$rating = filterRequest("rating");
$comment = filterRequest("comment");

$count=getData("cart","cart_user_id=$userId AND cart_item_id=$itemId AND cart_orders!=0",null,false);

if($count >1){
 $data = array(
    "items_rating_user_id"=>$userId,
    "items_rating_item_id"=>$itemId,
    "items_rating_rate"=>$rating,
    "items_rating_comment"=>$comment
 );
 insertData("items_rating",$data,true);
}else{
    echo json_encode(array(
        "status" => "failure",
        "message" => "you can not rate product before buy it"
    ));
}