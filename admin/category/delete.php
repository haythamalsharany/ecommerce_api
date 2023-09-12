

<?php

include "../../connect.php";
$catId = filterRequest("catId");
$imageName = filterRequest("imageName");
 deleteFile("../../upload/categories", $imageName);

 


deleteData("categories","categories_id = $catId ");
?>