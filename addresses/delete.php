<?php
include "../connect.php";


$addressId = filterRequest("addressId");


deleteData("addresses", "addresses_id  = $addressId", );
?>