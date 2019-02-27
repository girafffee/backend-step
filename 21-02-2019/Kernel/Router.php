<?php
namespace Kernel;

/**
 * 
 */
class Router{
	function __construct(){
	}

	function getMainController (){

		if (!isset($_GET["controller"])){
			return new \App\Page\PageController ();
		}

		if (!isset($_GET["action"])){
			$action= "show";
		} else {
			$action = $_GET["action"];
		}

		if (!isset($_GET["page_id"])){
			$page_id= 1;
		} else {
			$page_id = $_GET["page_id"];
		}


		switch ($_GET["controller"]) {
			case 'page':
			return new \App\Page\PageController ($action, $page_id);
				break;

			case 'post':
			return new \App\Post\PostController ();
				break;
			
			default:
			return new \App\Page\PageController (); // TODO Error 404 or HomePage
				break;
		}
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

// $Router = Router::getInstance();