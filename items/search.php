<?php


include "../connect.php";

$searchText = filterRequest("search");

$data = getAllData("itemsview", "items_name LIKE  '%$searchText%'  OR  items_name_ar  LIKE  '%$searchText%'");