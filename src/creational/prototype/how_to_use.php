<?php

namespace patterns\creational\prototype;

use patterns\creational\prototype\generators\UserGenerator;

$generator = new UserGenerator();

$generator->setUserPrototype(new ManagerPrototype());
$managers = $generator->generate(3);

$generator->setUserPrototype(new AuthenticatedPrototype());
$authenticatedUsers = $generator->generate(5);

var_dump($managers);
echo "================================================\r\n";
var_dump($authenticatedUsers);
