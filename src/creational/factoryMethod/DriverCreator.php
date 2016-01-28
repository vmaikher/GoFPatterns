<?php
namespace patterns\creational\factoryMethod;

abstract class DriverCreator
{
    abstract public function getDriver();
}