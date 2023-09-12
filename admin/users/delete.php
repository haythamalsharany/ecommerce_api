
<?php

include "../../connect.php";

$userId = filterRequest('Id');
deleteData("users","user_id = $userId");