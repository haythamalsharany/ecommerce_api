<?php

include "../connect.php";
$userId = filterRequest("userId");

getAllData("ordersview", "orders_user_id=$userId AND orders_status=0");
?>