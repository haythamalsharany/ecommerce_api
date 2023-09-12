<?php

include "../connect.php";


$userId = filterRequest("userId");

getAllData("addresses","addresses_usersid =$userId ");