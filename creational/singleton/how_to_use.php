<?php
require_once('ProxySettings.php');

$proxy_config_object = ProxySettings::getInstance();
var_dump($proxy_config_object->getProxySettings());
