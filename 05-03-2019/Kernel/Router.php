<?php
namespace Kernel;

/**
 * 
 */
class Router{
	function __construct(){
	}


/*
|--------------------------------------------------------------------------
| Создание запрошенного контроллера 
|--------------------------------------------------------------------------
|
| Router создает выбранный пользователем контроллер, и передеает ему параметры
|
*/
	function getMainController (){
		
		// В любой непонятной ситуации - вернуть главную страницу
		if (!isset($_GET["controller"])){ return new \App\Homepage\HomepageController ();}
		

		if (!isset($_GET["page_id"])){ $page_id= 0; } else { $page_id = $_GET["page_id"];}

		// Если пользователь не определил акцию, имя по умолчанию будет index
		if (!isset($_GET["action"])){ $action= "index"; } 
		else { $action = $_GET["action"];}



		// Выбираем нужный контроллер, на основе выбора пользователя ( $_GET )
		switch ($_GET["controller"]) {
			case 'page':
			case 'PageController':
			return new \App\Page\PageController ($action, $page_id);
				break;

			case 'HomepageController':
			return new \App\Homepage\HomepageController ();
				break;

			case 'post':
			return new \App\Post\PostController ();
				break;

			// If user chouse Contact Form controller
			case 'contactform':
			return new \App\Contactform\CFController ($action);
				break;
			
			default:
			return new \App\Page\PageController (); // TODO Error 404 or HomePage
				break;
		}
	}

	public static function BuildUrl($item){
			// Построение ссылки
		$url = $_SERVER['PHP_SELF'];
		$get = array();

		if (isset($item['controller'])) {
			$get[] = "controller=" . $item['controller'];
		}

		if (isset($item['action'])) {
			$get[] = "action=" . $item['action'];
		}

		if (isset($item['arg'])) {
			$arg = array();
			foreach ($item['arg'] as $keya => $valuea) {
				$arg[]=  $keya . "=" . $valuea;
			}
			$get[] = implode ('&',$arg);
		}

		$url.= '?' . implode ('&', $get);
		return $url;
	}



 	public static function BuildItem($data, $parent_id) {
	$res = "\n<ul>";

	foreach ($data as $key => $item) {
		if ($item['parentId'] == $parent_id){
			$res_a = '<a href="' . self::BuildUrl($item) . '" title="' . $item['slug'] . '" >' . $item['text'] . "</a>" ;
			$res.= "<li>" . $res_a;

			if ($item['hasCildren']){
				$res.= self::BuildItem($data, $key);
			}
			$res.= "</li>\n";
		}
	}
	$res.= "</ul>\n";

	return $res;
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