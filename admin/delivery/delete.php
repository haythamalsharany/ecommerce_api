
<?php

include "../../connect.php";

$deliveryId = filterRequest('Id');
deleteData("drivers","driver_id = $deliveryId ");