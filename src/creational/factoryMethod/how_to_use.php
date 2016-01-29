<?php
namespace patterns\creational\factoryMethod;

$mariadbCreator = new MariadbDriverCreator();
$mysqlCreator = new MysqlDriverCreator();

$mariadbDriver = $mariadbCreator->getDriver();
$mysqlDriver = $mysqlCreator->getDriver();

$mysqlDriver->connect('SiteDB', '127.0.0.1', 'volodymyr', 'secret');
$mysqlDriver->select('users', array('name', 'email'));
$mysqlDriver->addCondition('name', 'vasyl');

$mariadbDriver->connect('SiteDB', '127.0.0.1', 'ivan', 'secret');
$mariadbDriver->insert('products', array('name', 'quantity', 'price'), array('coffe', 4, 12));
