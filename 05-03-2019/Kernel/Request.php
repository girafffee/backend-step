<?php
namespace Kernel;

/**
 * 
 */
class Request {
	function __construct() {
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

// $Request = Request::getInstance();