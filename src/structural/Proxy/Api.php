<?php

namespace patterns\structural\proxy;

class Api implements ApiInterface
{
    public function getBasket($id)
    {
        echo "This is basket with id = $id";
    }

    public function getOrder($id)
    {
        echo "This is order with id = $id";
    }

    public function getAllOrders()
    {
        echo "This is list of orders";
    }
}
