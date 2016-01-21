<?php

namespace patterns\creational\prototype;

use patterns\creational\prototype\UserPrototype;

class AuthenticatedPrototype extends UserPrototype
{
    protected $role = 'authenticated';

    /**
     * empty clone.
     */
    public function __clone()
    {
    }
}
