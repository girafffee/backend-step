<?php
namespace App;

/**
 * 
 */
final class Config {

  // Путь к файлам View (шаблон)
  public static $pathToTemplate = __DIR__ . '/../resources/view/mydesign/';
  public static $pathToStorage = __DIR__ . '/../storage/';


  // Имя сайта
  public static $appSiteName = " My Site ";

  // НАстройки почты
  public static $emailSmtp = "smtp.google.com";
  public static $emailUser = "keeper@ninydev.com";
  public static $emaiPswd = "";

    public static $DBhost = "localhost";
    public static $DBport = 3306;
    public static $DBname = "c13db";
    public static $DBuser = "c13db";
    public static $DBpswd = "SaNkO20001221";




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
