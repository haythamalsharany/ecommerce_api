<?php
include "../connect.php";
$email = filterRequest("email");
$verfiycode     = rand(10000, 99999);
$stmt = $con->prepare("SELECT * FROM drivers WHERE driver_email = ? ");
$stmt->execute(array($email));
$count = $stmt->rowCount();
result($count);

if ($count > 0) {
    $data = array("driver_verfiy_code" => $verfiycode);
    updateData("drivers", $data, "driver_email = '$email'", false);
    sendEmail($email, "Verfiy Code Ecommerce", "Verfiy Code $verfiycode");
}
