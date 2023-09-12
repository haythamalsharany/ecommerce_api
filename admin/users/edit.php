<?php

include "../../connect.php";

$name = filterRequest("name");
$id = filterRequest("id");
$password = sha1($_POST['password']);
$email = filterRequest("email");
$phone = filterRequest("phone");




    $data = array(
        "user_name" => $name,
        "user_password" => $password,
        "user_email" => $email,
        "user_phone" => $phone,

     
    );
    // sendEmail($email, "Verfiy Code Ecommerce", "Verfiy Code $verfiycode");
    updateData("users", $data, "user_id = $id");
