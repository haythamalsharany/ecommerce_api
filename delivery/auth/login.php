<?php

include "../../connect.php";

$password = sha1($_POST['password']);
$email = filterRequest("email");
getData("drivers", "driver_email = ? AND  driver_password = ?", array($email, $password));