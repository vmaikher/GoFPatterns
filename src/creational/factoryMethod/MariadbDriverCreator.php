<?php
namespace patterns\creational\factoryMethod;

use patterns\creational\factoryMethod\drivers\MariadbDriver;

class MariadbDriverCreator extends DriverCreator
{
    public function getDriver(){
        return new MariadbDriver();
    }
}