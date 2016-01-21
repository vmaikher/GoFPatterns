<?php

namespace patterns\creational\prototype;

use patterns\creational\prototype\UserPrototype;

class ManagerPrototype extends UserPrototype
{
    protected $role = 'manager';

    /**
     * empty clone.
     */
    public function __clone()
    {
    }
}
