<?php

include "../../connect.php";

$name = filterRequest("name");
$id = filterRequest("id");
$password = sha1($_POST['password']);
$email = filterRequest("email");
$phone = filterRequest("phone");




    $data = array(
        "driver_name" => $name,
        "driver_password" => $password,
        "driver_email" => $email,
        "driver_phone" => $phone,

     
    );
    // sendEmail($email, "Verfiy Code Ecommerce", "Verfiy Code $verfiycode");
    updateData("drivers", $data, "driver_id = $id");
