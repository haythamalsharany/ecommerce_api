<?php

include "../../connect.php";

$name = filterRequest("name");
$password = sha1($_POST['password']);
$email = filterRequest("email");
$phone = filterRequest("phone");
$verfiycode = rand(10000, 99999);

$stmt = $con->prepare("SELECT * FROM drivers WHERE driver_email = ? OR driver_phone = ? ");
$stmt->execute(array($email, $phone));
$count = $stmt->rowCount();
if ($count > 0) {
    printFailure("PHONE OR EMAIL");
} else {

    $data = array(
        "driver_name" => $name,
        "driver_password" => $password,
        "driver_email" => $email,
        "driver_phone" => $phone,
       
        "driver_verify_code" => $verfiycode,
    );
    sendEmail($email, "Verfiy Code Ecommerce", "Verfiy Code $verfiycode");
    insertData("drivers", $data);
}