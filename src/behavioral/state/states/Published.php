<?php

namespace patterns\behavioral\state\states;

class Published extends State
{
    const REQUIRE_AMOUNT_OF_SIGNATURES = 200;

    public function addVote()
    {
        $this->petition->incrementSignature();
    }

    public function expire()
    {
        if ($this->petition->getSignatures() >= self::REQUIRE_AMOUNT_OF_SIGNATURES) {
            $this->petition->setState(new Supported($this->petition));
        } else {
            $this->petition->setState(new Outdated($this->petition));
        }
    }
}