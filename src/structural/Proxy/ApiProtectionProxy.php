<?php

namespace patterns\structural\Proxy;

class ApiProtectionProxy implements ApiInterface
{
    private $api;
    private $acl = array('manager', 'admin');
    private $user;

    public function __construct($user)
    {
        $this->api = new Api();
        $this->user = $user;
    }

    public function getBasket($id)
    {
        echo "This is basket with id = " . $id;
    }

    public function getOrder($id)
    {
        echo "This is order with id = " . $id;
    }

    public function getAllOrders()
    {
        if (in_array($this->user->getRole(), $this->acl)) {
            echo "This is list of orders";
        } else {
            echo "Operation is not allowed for user " . $this->user->getLogin();
        }
    }
}
