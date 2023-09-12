

<?php
include '../connect.php';
$userId=filterRequest('userId');
$addressId=filterRequest('addressId');
$couponId=filterRequest('couponId');
$orderPrice=filterRequest('orderPrice');
$couponDiscount=filterRequest('couponDiscount');
$paymentMethod=filterRequest('paymentMethod');
$ordersType=filterRequest('ordersType');
$deliveryPrice=filterRequest('deliveryPrice');



if($ordersType =="1"){
   $deliveryPrice =0;
}

$totalPrice=$orderPrice+$deliveryPrice;

$now = date("Y-m-d H:i:s");

$checkcoupon = getData("coupon", "coupon_id = '$couponId' AND coupon_expire_date > '$now' AND coupon_count > 0  ", null,  false);


if ($checkcoupon  > 0) {
    $totalPrice =  $totalPrice - $orderPrice * $couponDiscount / 100;
    $stmt = $con->prepare("UPDATE `coupon` SET  `coupon_count`= `coupon_count` - 1  WHERE coupon_id = '$couponId' ");
    $stmt->execute();
}

$data = array(
    "orders_user_id"  =>  $userId,
    "orders_address_id"  =>  $addressId,
    "orders_type"  =>  $ordersType,
    "orders_price_delivery"  =>  $deliveryPrice,
    "orders_price"  =>  $orderPrice,
    "orders_coupon_id"  =>  $couponId,
    "orders_totalprice"  =>  $totalPrice,
    "orders_payment_method"  =>  $paymentMethod
);

$count= insertData('orders',$data,false);
if($count >0){
    $stm = $con->prepare("SELECT MAX(orders_id) FROM orders");
    $stm->execute();
    $maxId = $stm->fetchColumn();
     
    $data = array("cart_orders" => $maxId);
    updateData('cart',$data,"cart_user_id=$userId AND cart_orders = 0");
    sendGCM("Alert" , "new pinding order waiting to approve" , "admins" , "none" , "none");
}


