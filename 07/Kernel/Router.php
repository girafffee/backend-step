<?php
namespace Kernel;
use \Kernel\Lib\PP;


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
	public $path;

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

	public function addPath($path) {
		$this->path = $path;
		return $this;
	}

	public function showInMap($flag = true) {
		$this->siteMap = $flag;
		return $this;
	}

	public function routeName($name) {
		$this->name = $name;
		return $this;
	}

	public function middleware($mid) {
		$this->middleware[] = $mid;
		return $this;
	}

	public function midEcho(){
	    for($i = 0; $i < sizeof($this->middleware); $i++){
	        echo $this->middleware[$i] . "\n";
        }
	    return $this;
    }

    public function name($name){
	    $this->name = $name;
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

    static function getRoute($url){
        return self::$routes[$url]->url;
    }
    //Создает маршрут при условии, что он не был создан ранее
    static function resource($url, $controller){
        $mainRoute = self::add($url, $controller, "index");
        self::add($url . "/create", $controller, "create", $mainRoute);
        self::add($url . "/store", $controller, "store", $mainRoute);
        self::add($url . "/show", $controller, "show", $mainRoute);
        self::add($url . "/edit", $controller, "edit", $mainRoute);
        self::add($url . "/update", $controller, "update", $mainRoute);
        self::add($url . "/destroy", $controller, "destroy", $mainRoute);
        return $mainRoute;
    }

    static function auth($url, $controller){
        $mainRoute = self::add($url, $controller, "index");
        self::add($url . "/login", $controller, "loginInto", $mainRoute);
        self::add($url . "/register", $controller, "registerCreate", $mainRoute);
        self::add($url . "/logout", $controller, "loginOut", $mainRoute);
        return $mainRoute;
    }


    // /ссылка база / {action} / {key_name} / {key_name} ...
    // user/{action: index}/{user_id}
    // blog/{post_id} - если нет action - action = index
    // page/{page_id}
    static function addGroup ($url, $controller){
    	$url = mb_strtolower($url);
    	$url = str_replace('{', '', $url);
		$url = str_replace('}', '', $url);
        $url = explode('/', $url);


        array_shift($url);
        $mainUrl = '/'.$url[0];

        $path = array();

        for($i = 1; $i < sizeof($url); $i++){
            $path[] = $url[$i];
        }

        $route = self::add($mainUrl, $controller);
        $route->addPath($path);

        return $route;
    }

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

            // Если есть родительский роутер
            if (!is_null(self::$routes[$url]->parent_id)) {
                if (is_array(self::$routes[$url]->parent_id->middleware)) { // Если у родителя массив посредников
                    if (is_array(self::$routes[$url]->middleware)) // Если посредники есть и там и там, объеденить
                        array_merge (self::$routes[$url]->middleware, self::$routes[$url]->parent_id->middleware);
                    else// если посредник только у родителя
                        self::$routes[$url]->middleware = self::$routes[$url]->parent_id->middleware;

                }
            }

			if(is_array(self::$routes[$url]->middleware)){

				for($i = 0; $i < sizeof(self::$routes[$url]->middleware); $i++){
					$tmp = '\App\Middleware\\' . self::$routes[$url]->middleware[$i];
					$middleware[$i] = new $tmp();
				}
			}
            // Возвращаю экземпляр главного контроллера, передавая ему тот метод
            // который нужно вызвать
			return new self::$routes[$url]->controller(self::$routes[$url]->action, self::$routes[$url]->arg);
		}


        $url = explode("/", $url);
		array_shift($url);
        $mainUrl = '/'.$url[0];

        if(isset(self::$routes[$mainUrl])){
            echo "<p>Динамический маршрут</p>";
            $arg = array();

            echo "<p>Путь маршрута</p>";
            echo PP::dump(self::$routes[$mainUrl]->path);

            $action = self::$routes[$mainUrl]->action;

            if(is_array(self::$routes[$mainUrl]->path)){
            	for ($i = 0; $i < sizeof(self::$routes[$mainUrl]->path); $i++){
            	    if(self::$routes[$mainUrl]->path[$i] == "action")
                        $action = $url[$i+1];
            	    else
                        $arg[self::$routes[$mainUrl]->path[$i]] = $url[$i+1];
            	}
            }
            echo "<p>Разбор пути</p>";
            echo PP::dump($arg);

            if (is_array(self::$routes[$mainUrl]->middleware)) {
                for ($i = 0; $i < sizeof(self::$routes[$mainUrl]->middleware); $i++){
                    // Создаю новый класс по названию, записанному в переменную
                    $tmp = "\App\Middleware\\" . self::$routes[$mainUrl]->middleware[$i];
                    echo $tmp;
                    $middleware[$i] = new $tmp();
                }
            }

            return new self::$routes[$mainUrl]->controller($action, $arg);
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


    /**
     * @param $data
     * @param $parent_id
     * @return string
     *
     *  Данная функция должна использоваться в шаблоне
     *  главного меню
     */
 public static function BuildItem($data, $parent_id) {
	$res = "\n<ul>";

	foreach ($data as $key => $item) {
		if ($item['parentId'] == $parent_id){
			$res_a = '<a href="' . $item['slug'] . '" title="' . $item['slug'] . '" >' . $item['text'] . "</a>" ;
			$res.= "<li>" . $res_a;

			if ($item['hasChildren']){
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