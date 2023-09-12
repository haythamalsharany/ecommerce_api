<?php

include "../../connect.php";

$orderId = filterRequest("orderId");

$userId = filterRequest("userId");

$deliveryId = filterRequest("deliveryId");

$data = array(
    "orders_status" => 3 , 
    "orders_delivery" => $deliveryId 
);

updateData("orders", $data, "orders_id = $orderId AND orders_status = 2");

// sendGCM("success" , "The Order Has been Approved" , "users$userid" , "none" , "refreshorderpending"); 

insertNotify("success", "Your order is on the way", $userId, "users$userId", "none",  "refreshorderpending");


sendGCM("warning" , "The Order Has been Approved by delivery" , "services" , "none" , "none"); 


sendGCM("warning" , "The Order Has been picked up by delivery  " . $deliveryId , "delivery" , "none" , "none"); 
