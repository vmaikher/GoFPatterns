<?php

use patterns\structural\proxy\ApiProtectionProxy;
use patterns\structural\proxy\User;

$user = new User('mark', 'pass', 'user');
$admin = new User('adam', 'pass', 'admin');

$userApi = new ApiProtectionProxy($user);
$adminApi = new ApiProtectionProxy($admin);

$userApi->getOrder(1);
echo "\n";
$userApi->getAllOrders();
echo "\n\n";

$adminApi->getOrder(5);
echo "\n";
$adminApi->getAllOrders();
