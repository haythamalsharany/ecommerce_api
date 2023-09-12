<?php


include "../connect.php";

$userId = filterRequest('userId');
$itemId = filterRequest('itemId');

$stmt = $con->prepare("SELECT count(cart_id) AS countitems FROM cart WHERE cart_user_id =$userId AND cart_item_id = $itemId AND cart_orders = 0 ");
$stmt->execute();
$count = $stmt->rowCount();
$data = $stmt->fetchColumn();
if ($count > 0) {
    echo json_encode(
        array(
            "status" => "success",
            "data" => $data
        )
    );
} else {
    echo json_encode(
        array(
            "status" => "success",
            "data" => "0"
        )
    );
}