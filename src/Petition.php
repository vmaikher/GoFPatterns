<?php

namespace patterns\behavioral\state;

use patterns\behavioral\state\states\State;
use patterns\behavioral\state\states\Registered;

class Petition
{
    private $state;
    private $subject;
    private $publishedAt;
    private $signatures = 0;

    public function __construct($subject)
    {
        $this->subject = $subject;
        $this->state = new Registered($this);
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return integer
     */
    public function getSignatures()
    {
        return $this->signatures;
    }

    public function incrementSignature()
    {
        $this->signatures++;
    }

    /**
     * @return mixed
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    /**
     * @param mixed $publishedAt
     */
    public function setPublishedAt($publishedAt)
    {
        $this->publishedAt = $publishedAt;
    }



    public function setState(State $state)
    {
        $this->state = $state;
    }
}