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

    public function changeSubject($subject)
    {
        echo "operation: change subject is not allowed".PHP_EOL;
    }

    public function addVote()
    {
        echo "operation: add vote is not allowed".PHP_EOL;
    }

    public function publish()
    {
        echo "operation: published is not allowed".PHP_EOL;
    }

    public function expire()
    {
        echo "operation: expire is not allowed".PHP_EOL;
    }

    public function cancel()
    {
        $this->petition->setState(new Cancelled($this->petition));
    }
}