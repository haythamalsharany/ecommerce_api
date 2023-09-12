<?php
include "../../connect.php";

$userId = filterRequest('userId');
$orderId = filterRequest('orderId');

$data = array("orders_status" => 1);

updateData("orders", $data, "orders_id=$orderId AND orders_status=0");
 //sendGCM("success" , "The Order Has been Approved" , "user$userId" , "none" , "refreshorderpending"); 
insertNotify("success", "The Order Has been Approved", $userId, "user".$userId, "none", "refreshorderpending");
sendGCM("warning" , "pick new order" , "delivery" , "none" , "none");