<?php
final class Singleton {
  private static $instance;
  private function __construct() {
  }

  public static function getInstance() {
    if(null === static::$instance) {
      static::$instance = new static();
    }

    return static::$instance;
  }

  private function __clone() {
    throw new Exception("You try clone a Singleton. Singleton's cloning is forbidden");
  }

  private function __wakeup() {
    throw new Exception("You try unserialize a Singleton. Singleton's unserializing is forbidden");
  }
}
}
