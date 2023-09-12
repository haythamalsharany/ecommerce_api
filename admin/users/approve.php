<?php

include "../../connect.php";

$id = filterRequest("id");
$approve = filterRequest("approve");

    $data = array(
        "user_approve" => $approve,
        

     
    );
 
    updateData("users", $data, "user_id = $id");
