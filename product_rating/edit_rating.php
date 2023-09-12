<?php
include "../connect.php";


$rating = filterRequest("rating");
$ratingId = filterRequest("ratingId");
$comment = filterRequest("comment");




$data = array(
    "items_rating_id" => $ratingId,

    "items_rating_rate" => $rating,
    "items_rating_comment" => $comment
);
updateData("items_rating", $data, "items_rating_id = $ratingId", );