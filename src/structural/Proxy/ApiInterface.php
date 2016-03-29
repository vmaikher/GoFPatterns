<?php

namespace patterns\structural\proxy;

interface ApiInterface
{
    public function getBasket($id);
    public function getOrder($id);
    public function getAllOrders();
}
