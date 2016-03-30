<?php

namespace patterns\behavioral\state\states;

class Outdated extends State
{
    public function cancel()
    {
        echo "Can't cancel outdated petition. It should be saved for history".PHP_EOL;
    }
}