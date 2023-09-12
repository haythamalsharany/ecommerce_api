<?php

include "connect.php";


$allData = array();
$allData['status'] = 'success';
$allData['categories'] = getAllData("categories", null, null, false);
$allData['items'] = getAllData("itemstopselling", "1=1", null, false);
$allData['settings'] = getAllData("settings", "1=1", null, false);
echo json_encode($allData);

?>