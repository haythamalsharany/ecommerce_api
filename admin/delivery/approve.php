<?php

include "../../connect.php";

$id = filterRequest("id");
$approve = filterRequest("approve");


    $data = array(
        "drive_approve" => $approve,
        

     
    );

    updateData("drives", $data, "drive_id = $id");
