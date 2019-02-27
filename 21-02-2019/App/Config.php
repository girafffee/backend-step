<?php
namespace App;

/**
 * 
 */
final class Config {

      private function __construct() {
      }


//*------------------------------------------------------------
// Обеспечение единственной копии класса      
      private static $instance;
      public static function getInstance() {
          if (!self::$instance) {
              self::$instance = new self();
          }
          return self::$instance;
      }
      private function __clone() {}
      private function __wakeup() {}
}

// $Config = Config::getInstance();
