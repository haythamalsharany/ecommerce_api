<?php
include "connect.php";
$orderId = filterRequest('orderId');
$rating = filterRequest('rating');
$comment = filterRequest('comment');


$data = array(
    "orders_rate" => $rating,
    "orders_comment" => $comment
);

updateData("orders", $data, "Orders_id = $orderId");