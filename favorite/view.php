<?php
include "../connect.php";


$userId = filterRequest("userId");
getAllData("myfavorite", "favorite_user_id = ?", array($userId));


?>