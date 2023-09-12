<?php

include "../connect.php";

$email = filterRequest("email");
$password = sha1($_POST['password']) ; 
$data = array("driver_password" => $password);
updateData("drivers", $data, "driver_email = '$email'");
