<?php
namespace App;

/**
 * 
 */
final class Config {

  // Путь к файлам View (шаблон)
  public static $pathToTemplate = __DIR__ . '/../resources/view/mydesign/';

  // Имя сайта
  public static $appSiteName = "Girafffee";

  // НАстройки почты
  public static $emailSmtp = "smtp.google.com";
  public static $emailUser = "sanko200065@gmail.com";
  public static $emaiPswd = "";
  





//*------------------------------------------------------------
// Обеспечение единственной копии класса      
      private function __construct() {}
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
