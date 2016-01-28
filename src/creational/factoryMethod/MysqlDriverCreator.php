<?php
namespace patterns\creational\factoryMethod;

use patterns\creational\factoryMethod\drivers\MysqlDriver;

class MysqlDriverCreator extends DriverCreator
{
    public function getDriver(){
        return new MysqlDriver();
    }
}