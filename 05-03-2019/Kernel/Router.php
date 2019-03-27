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

	public $parent_id;  //url for parent route
	public $siteMap;

	public function __construct ($url, $controller, $action = "index", $parent_id = null){
		
		$this->siteMap = false;
		$this->url = $url;
		$this->controller = $controller;
		$this->action = $action;
		$this->parent_id = $parent_id;		

	}

	public function addArg($key, $value) {
		$this->arg[$key] = $value;
		return $this;
	}

	public function showInMap($flag = true) {
		$this->siteMap = $flag;
		return $this;
	}

	public function routeName($name) {
		$this->name = $name;
        Router::$nameRoute = $name;
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

    static $routes;
    static $nameRoute;
	static $showRoutes;


// ToDo:
	// На примере addForm написать метод,создающий route для CRUD
	// должно создать 
	// / -для отображения index
	// create -вызвать метод create
	// read, update, delete - вызывать соответсвующие методы контроллера
	//
	// Разобраться с посредником - что бы для всех созданных маршрутов вызывался
	// посредник

    //Создает маршрут при условии, что он не был создан ранее
    static function resource($url = "/", $controller, $action = "index"){
        if(!isset(self::$routes[$url]))
            self::add($url, $controller, $action);
        self::add($url . "/create", $controller, "create");
        self::add($url . "/store", $controller, "store");
        self::add($url . "/show", $controller, "show");
        self::add($url . "/edit", $controller, "edit");
        self::add($url . "/update", $controller, "update");
        self::add($url . "/destroy", $controller, "destroy");

    }

    // Обращается к роутеру по имени и переписывает нужные параметры
    
/*
    static function showSiteMap(){
    	if(isset(self::add($url, $controller, $action)->showInMap)){
    		self::$showRoutes = array();
    		self::$showRoutes[] = self::$routes[$url];
    		return Kernel\Lib\PP::dump(Kernel\Router::$showRoutes);
    	}
    }
*/

/*
|--------------------------------------------------------------------------
| Создание маршрута для контактной формы
|--------------------------------------------------------------------------
|
| 
|
*/


	static function addForm($url, $controller){
		$mainRoute = self::add($url, $controller, "index");
		self::add($url, $controller, "send", $mainRoute);
		return $mainRoute;
	}

	static function getFormAction () {
		$url =  explode('?' , $_SERVER['REQUEST_URI']);
		return $url[0] . "/send";
	}


/*
|--------------------------------------------------------------------------
| Создание маршрута
|--------------------------------------------------------------------------
|
| 
|
*/

    // static $rCount;

	// Прямой маршрут
	static function add($url, $controller, $action = "index", $parent_id = null){
		self::$routes[$url] = new RouteEl ($url, $controller, $action, $parent_id);
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


		$url =  explode('?' , "/" . str_replace ("public/", "" , strstr($_SERVER['REQUEST_URI'], "public/")));
		$url = $url [0];

		//echo $url;
		// echo self::$routes[$url]->controller;

		if(isset(self::$routes[$url])){
			//if(!is_null(self::$routes->parent_id)){
				//if(isset(self::$routes->middleware))
			//}
			if(is_array(self::$routes[$url]->middleware)){

				for($i = 0; $i < count(self::$routes[$url]); $i++){
					$tmp = '\App\Middleware\\' . self::$routes[$url]->middleware[$i];
					$middleware[$i] = new $tmp();
				}
			}
			return new self::$routes[$url]->controller(self::$routes[$url]->action, self::$routes[$url]->arg);
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