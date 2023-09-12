<?php
include "../connect.php";


$userId = filterRequest("userId");
$itemId = filterRequest("itemId");

$Qyt = filterRequest("Qyt");

for ($i = 0; $i < $Qyt; $i++) {


    if ($Qyt - $i > 1) {
        deleteData("cart", "cart_id = (SELECT cart_id FROM cart WHERE cart_user_id= $userId AND cart_item_id= $itemId  AND cart_orders = 0 LIMIT 1)", false);
    } else {
        deleteData("cart", "cart_id = (SELECT cart_id FROM cart WHERE cart_user_id= $userId AND cart_item_id= $itemId  AND cart_orders = 0 LIMIT 1)", );
    }
}


?>