<?php
include "../connect.php";
$userId = filterRequest("userId");

$data = getAllData("cartView", "cart_user_id = $userId ", null, false);
$stmt = $con->prepare("SELECT count(countitems  ) AS totalcount,SUM(itemsprice)  AS totalprice
 FROM cartview
 WHERE cart_user_id = $userId
 GROUP BY cart_user_id ");
$stmt->execute();

$datacountprice = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode(
    array(
        "status" => "success",
        "cartData" => $data,
        "countAndPrice" => $datacountprice
    )

);
?>