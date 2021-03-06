<?php

// Singleton pattern
class Db {
  private static $instance = NULL;
  private function __construct() {}
  private function __clone() {}

  public static function getInstance() {
    if (!isset(self::$instance)) {
      $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
      self::$instance = new PDO('mysql:host=localhost;dbname=ucl_scenario_week_5_secure','ucl_sw_5_admin','FCQYxUFDWNrCtBYr', $pdo_options);
    }
    return self::$instance;
  }
}