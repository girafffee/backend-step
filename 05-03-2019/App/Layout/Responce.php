<?php
namespace App\Layout;

//use App\Layout\HeadController;
//use App\Layout\HeaderController;
//use App\Layout\SidebarController;
//use App\Layout\FooterController;
//use App\Layout\MainNavigationController;

/**
 * 
 */
final class Responce {

    public static $pageData;


//*------------------------------------------------------------
// Собрать данные для построения страницы
    public static function buildPageData (){
      self::$pageData ['header'] = HeaderController::getContent();
      self::$pageData ['head'] = HeadController::getContent();
      self::$pageData ['sidebar'] = SidebarController::getContent();
      self::$pageData ['footer'] = FooterController::getContent();
      self::$pageData ['mainnav'] = MainNavigationController::getContent();
    }


//*------------------------------------------------------------
// Вернуть всю страницу
    public static function renderPage(){
      if (isset($_GET['ajax'])) { return self::$pageData ['content']; }


      $ret = '<!DOCTYPE html><html lang="ru" class="no-js">';
      $ret.= self::$pageData ['head'];
      $ret.= "\n<body>\n";
      $ret.= self::$pageData ['header'];
      $ret.= self::$pageData ['mainnav'];
      $ret.= self::$pageData ['sidebar'];
      $ret.= self::$pageData ['content'];
      $ret.= self::$pageData ['footer'];
      $ret.= "\n</body></html>";
      return $ret;
    }

//*------------------------------------------------------------
// Добавить данные в позицию
    public static function putPosition ($name, $content){
      self::$pageData[$name].= $content;
    }





//*------------------------------------------------------------
// Обеспечение единственной копии класса      
    private function __construct() {      
      // self::$pageData ['head'] = "";
      // self::$pageData ['header'] = "";
      // self::$pageData ['sidebar'] = "";
      // self::$pageData ['footer'] = "";
      // self::$pageData ['mainnav'] = "";
      self::$pageData ['content'] ="";
    }
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

//$Responce = Responce::getInstance();
