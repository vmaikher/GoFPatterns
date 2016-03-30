<?php

use patterns\behavioral\state\Petition;

echo "Successful scenario:".PHP_EOL;
$petition = new Petition("Transparent government");
$petition->publish();

for ($i = 0; $i < 200; $i++) {
    $petition->addVote();
}

$petition->expire();

var_dump($petition);

echo "==============================================================".PHP_EOL;
echo "Bad scenario:".PHP_EOL;

$petition = new Petition("Free food");
$petition->addVote();

$petition->cancel();
$petition->publish();

var_dump($petition);
