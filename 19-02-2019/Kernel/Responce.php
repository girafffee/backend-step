<?php
namespace Kernel;

/**
 * 
 */
final class Responce
{
      private static $instance;
      public static function getInstance()
      {
          if (!self::$instance) {
              self::$instance = new self();
          }
          return self::$instance;
      }
      private function __clone(){
          
      }
      private function __wakeup(){
      }
}
$Responce = Responce::getInstance();