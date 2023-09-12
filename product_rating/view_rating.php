<?php
include "../connect.php";
$itemId = filterRequest("itemId");
//$data =getAllData("ratingView","items_rating_item_id = $itemId",null,false);
$stmt1 = $con->prepare("SELECT * From ratingView  WHERE items_rating_item_id =$itemId");
$stmt1->execute();
$data = $stmt1->fetchAll(PDO::FETCH_ASSOC);

$count = $stmt1->rowCount();

if ($count > 0) {
    $stmt = $con->prepare("SELECT SUM(items_rating_rate)/ count(items_rating_rate) as itemRating From ratingView  WHERE items_rating_item_id =$itemId LIMIT 1");

    $stmt->execute();
    $rating = $stmt->fetch(PDO::FETCH_ASSOC);

    echo json_encode(
        array(
            "status" => "success",
            "data" => $data,
            "rating" => $rating['itemRating']
        )
    );

} else {

    echo json_encode(array("status" => "failure"));
}