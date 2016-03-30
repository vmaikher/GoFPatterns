<?php

namespace patterns\behavioral\state\states;

class Registered extends State
{
    public function changeSubject($subject)
    {
        $this->petition->setSubject($this);
    }
}