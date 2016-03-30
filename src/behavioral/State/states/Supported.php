<?php

namespace patterns\behavioral\state\states;

class Supported extends State
{
    public function cancel()
    {
        echo "Can't cancel supported petition".PHP_EOL;
    }
}