<?php
include "../connect.php";


$userId = filterRequest("userId");
$itemId = filterRequest("itemId");
$Qyt = filterRequest("Qyt");

for ($i = 0; $i < $Qyt; $i++) {
    $data = array(
        "cart_user_id" => $userId,
        "cart_item_id" => $itemId
    );

    if ($Qyt - $i > 1) {
        insertData("cart", $data, false);
    } else {
        insertData("cart", $data);
    }

}

?>