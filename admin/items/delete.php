<?php

include "../../connect.php";
$itemId = filterRequest("itemId");
$imageName = filterRequest("imageName");
deleteFile("../../upload/categories", $imageName);




deleteData("items", "items_id = $itemId ");
?>