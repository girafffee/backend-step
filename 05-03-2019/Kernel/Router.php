<?php
namespace Kernel;


/*
|--------------------------------------------------------------------------
| Данные для одного маршрута
|--------------------------------------------------------------------------
|
| 
|
*/
class RouteEl {
	public $url;
	public $controller;
	public $action;
	public $name;
	public $arg;
	public $middleware;

	public function __construct ($url, $controller, $action = "index"){
		$this->url = $url;
		$this->controller = $controller;
		$this->action = $action;		
	}

	public function addArg($key, $value) {
		$this->arg[$key] = $value;
		return $this;
	}

	public function setName($name) {
		$this->name = $name;
		return $this;
	}

	public function middleware($mid) {
		$this->middleware = array();
		$this->middleware[] = $mid;
		return $this;
	}


}


/*
|--------------------------------------------------------------------------
| Работа с маршрутами
|--------------------------------------------------------------------------
|
| 
|
*/
class Router{

/*
|--------------------------------------------------------------------------
| Создание маршрута
|--------------------------------------------------------------------------
|
| 
|
*/
	static $routes;
	// static $rCount;

	// Прямой маршрут
	static function add($url, $controller, $action = "index"){
		self::$routes[$url] = new RouteEl ($url, $controller, $action);
		return self::$routes[$url]; //Возвращает обьект
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

	// echo $_SERVER['REQUEST_URI'] . "<br>";


$url =  "/" . str_replace ("public/", "" , strstr($_SERVER['REQUEST_URI'], "public/"));

	// echo $url;
	// echo self::$routes[$url]->controller;

	if(isset(self::$routes[$url])){
		// var_dump(self::$routes[$url]->arg);
	if(is_array(self::$routes[$url]->middleware)){
		for($i = 0; $i < sizeof(self::$routes[$url]); $i++){
			$tmp = '\App\Middleware\\' . self::$routes[$url]->middleware[$i];
			$middleware[$i] = new $tmp();
		}
	}

		return new self::$routes[$url]->controller(self::$routes[$url]->action, self::$routes[$url]->arg);
	}

	// return new self::$routes[$url]();


		die ("<hr>Stop Router");

		
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


	public static function  BuildUrl($item){
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
			$res_a = '<a href="' . $item['slug'] /*self::BuildUrl($item)*/ . '" title="' . $item['slug'] . '" >' . $item['text'] . "</a>" ;
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
	  private function __construct(){}
      private function __clone() {}
      private function __wakeup() {}	
}

// Router::$rCount = 0;
// $Router = Router::getInstance();


//*------------------------------------------------------------
// Подключение маршрутов
include_once ("../Route/web.php");