<?php

namespace patterns\behavioral\state\states;

use patterns\behavioral\state\Petition;

abstract class State
{
    protected $petition;

    public function __construct(Petition $petition)
    {
        $this->petition = $petition;
    }

    public function changeSubject()
    {
        echo "operation: change subject is not allowed";
    }

    public function Publish()
    {
        echo "operation: do published is not allowed";
    }

    public function Cancel()
    {
        echo "operation: do published is not allowed";
    }
}