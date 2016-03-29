<?php

namespace patterns\structural\Proxy;

class User
{
    private $login;
    private $pass;
    private $role;

    public function __construct($login, $pass, $role)
    {
        $this->login = $login;
        $this->pass = $pass;
        $this->role = $role;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }
}