<?php

use patterns\structural\Proxy\ApiProtectionProxy;
use patterns\structural\Proxy\User;

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
