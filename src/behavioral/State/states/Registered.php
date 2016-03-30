<?php

namespace patterns\behavioral\state\states;

class Registered extends State
{
    public function publish()
    {
        $this->petition->setPublishedAt(time());
        $this->petition->setState(new Published($this->petition));
    }

    public function changeSubject($subject)
    {
        $this->petition->setSubject($subject);
    }
}