<?php

namespace patterns\creational\singleton;

use patterns\creational\singleton\ProxySettings;

$proxy_config_object = ProxySettings::getInstance();
var_dump($proxy_config_object->getProxySettings());

$wer = clone $proxy_config_object;
