<?php

include "../../connect.php";
$catNameAr = filterRequest("catNameAr");
$catNameEn = filterRequest("catNameEn");

$catImageName = imageUpload("../../upload/categories", "files");


$data = array(
    "categories_name" => $catNameEn,
    "categories_name_ar" => $catNameAr,
    "categories_image" => $catImageName,

);

insertData("categories", $data);
?>