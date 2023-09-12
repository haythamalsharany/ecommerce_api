<?php
include "../connect.php";

$itemId = filterRequest("itemId");
getAllData("itemscolors", "items_color_item_id=$itemId");