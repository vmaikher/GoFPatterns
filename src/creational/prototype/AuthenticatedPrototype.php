<?php

namespace patterns\creational\prototype;

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
