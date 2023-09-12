

<?php
include 'connect.php';
$userId=filterRequest("userId");
getAllData("notification","notification_userid=$userId");