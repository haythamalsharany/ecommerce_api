<?php 

include "../connect.php"  ;

$email = filterRequest("email");

$verfiycode     = rand(10000 , 99999);

$data = array(
"user_verfiy_code" => $verfiycode
) ; 

updateData("users" ,  $data  , "user_email = '$email'" ) ; 

sendEmail($email , "Verfiy Code Ecommerce" , "Verfiy Code $verfiycode") ; 

 