<?php

namespace patterns\behavioral\State\states;

class Cancelled extends State
{
    public function cancel()
    {
        echo "petition is already cancelled".PHP_EOL;
    }
}