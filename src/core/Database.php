<?php

namespace App\core;

use PDO;

// Using a singleton pattern so that there is only one
// instance of the PDO object
class Database {

  protected function __construct() {}

  private function __clone() {}

  private function __wakeup() {}

  public static function getInstance(array $config)
  {

    $dsn = "mysql:host={$config['host']};dbname={$config['db']};charset={$config['charset']}";

    return new PDO($dsn, $config['user'], $config['password'], $config['options']);
  
  }
  
}