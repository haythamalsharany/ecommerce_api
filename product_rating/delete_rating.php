<?php
include "../connect.php";

$ratingId = filterRequest("ratingId");


deleteData("items_rating", "items_rating_id = $ratingId",);
?>