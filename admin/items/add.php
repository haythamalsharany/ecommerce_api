<?php 

include '../../connect.php';

$msgError = array()  ;

$table = "items";

$name = filterRequest("name");

$nameAr = filterRequest("nameAr"); 

$desc = filterRequest("desc"); 

$descAr = filterRequest("descAr"); 

$count = filterRequest("count");  

$price = filterRequest("price"); 

$discount = filterRequest("discount"); 

$catId = filterRequest("catId"); 

//$datenow = filterRequest("datenow"); 
$imagename = imageUpload( "../../upload/items" , "files") ;

$data = array( 
"items_name"            => $name,
"items_name_ar"         => $nameAr,
"items_desc"            => $desc,
"items_desc_ar"         => $descAr,
"items_count"           => $count,
"items_price"           => $price,
"items_discount"        => $discount,
"items_active"          => "1",
"items_image"           => $imagename,
"items_cat"             => $catId,
//"items_date"            => $datenow
);

insertData($table , $data);