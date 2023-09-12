<?php 

include "../../connect.php" ; 

$deliveryId = filterRequest("deliveryId") ; 
  
getAllData('ordersview' , "1 = 1 AND orders_status = 4   AND orders_delivery = $deliveryId   ") ; 

?>