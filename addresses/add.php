<?php
include "../connect.php";


$userId = filterRequest("userId");
$city = filterRequest("city");
$street = filterRequest("street");
$lat = filterRequest("lat");
$lang = filterRequest("long");
$addresName = filterRequest("addressName");



$data = array(
    "addresses_usersid" => $userId,
    "addresses_name" => $addresName,
    "addresses_city" => $city,
    "addresses_street" => $street,
    "addresses_long" => $lang,
    "addresses_lat" => $lat,
);


insertData("addresses", $data);
?>