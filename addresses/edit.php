<?php
include "../connect.php";


$addressId = filterRequest("addressId");
$city = filterRequest("city");
$street = filterRequest("street");
$lat = filterRequest("lat");
$long = filterRequest("long");
$addresName = filterRequest("addressName");



$data = array(

    "addresses_name" => $addresName,
    "addresses_city" => $city,
    "addresses_street" => $street,
    "addresses_long" => $long,
    "addresses_lat" => $lat,
);


updateData("addresses", $data, "addresses_id = $addressId ");
?>