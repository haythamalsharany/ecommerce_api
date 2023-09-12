

<?php

include "../../connect.php";
$catId = filterRequest("catId");
$catNameAr = filterRequest("catNameAr");
$catNameEn = filterRequest("catNameEn");

$catImageName = imageUpload("../../upload/categories", "files");

 if($catImageName == "empty"){
    $data = array(
        "categories_name"     => $catNameEn,
        "categories_name_ar"  => $catNameAr,   
    );
 }else{
    $data = array(
        "categories_name"    => $catNameEn,
        "categories_name_ar" => $catNameAr,
        "categories_image"   => $catImageName,
    
    );
 }


updateData("categories", $data,"categories_id = $catId ");
?>