<?php

include "../../connect.php";

$orderId = filterRequest("orderId");

$userId = filterRequest("userId");

$data = array(
    "orders_status" => 4
);

updateData("orders", $data, "orders_id = $orderId AND orders_status = 3");

// sendGCM("success" , "The Order Has been Approved" , "users$userid" , "none" , "refreshorderpending"); 

insertNotify("success", "Your Order Has been deliverd", $userId, "users$userId", "none",  "refreshorderpending");


sendGCM("warning" , "The Order Has been deliverd to The Customer" , "services" , "none" , "none"); 
