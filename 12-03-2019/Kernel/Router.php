<?php
namespace Kernel;
use App\Homepage\HomeController;
/**
 * 
 */
class Router{
	function __construct(){
	}
	
	private $controller;
	function getMainController (){

		if (!isset($_GET["controller"]) OR $_GET["controller"] == "home"){
			return new HomeController ();
		}

		if (!isset($_GET["action"]))
			$action= "index";
		else
			$action = $_GET["action"];

		if (!isset($_GET["page_id"]))
			$page_id = 0;
		else
			$page_id = $_GET["page_id"];


		switch ($_GET["controller"]) {
			case 'page':
			case 'PageController':
			return new \App\Page\PageController ($page_id, $action);
				break;

			case 'HomeController':
			return new \App\Homepage\HomeController ();
				break;

			case 'post':
			return new \App\Post\PostController ();
				break;

			case 'contactform':
			return new \App\Contactform\CFController ($action);
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