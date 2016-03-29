<?php

namespace patterns\structural\Proxy;

interface ApiInterface
{
    public function getBasket($id);
    public function getOrder($id);
    public function getAllOrders();
}
