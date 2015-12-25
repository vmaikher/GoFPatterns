<?php
final class ProxySettings
{
    private static $instance;
    private $proxySettings;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    private function __clone()
    {
        throw new Exception("You try clone a Singleton. Singleton's cloning is forbidden");
    }

    private function __wakeup()
    {
        throw new Exception("You try unserialize a Singleton. Singleton's unserializing is forbidden");
    }

    public function getProxySettings()
    {
        if (null === $this->proxySettings) {
            require_once('settings.php');
            $this->proxySettings = $proxy_settings;
        }

        return $this->proxySettings;

    }
}
