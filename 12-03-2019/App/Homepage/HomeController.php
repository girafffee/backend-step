<?php
namespace App\Homepage;
use App\Layout\HeaderController;

/**
 * 
 */
class HomeController  extends \Kernel\Base\BaseController
{
	private $Model;
	private $content;
	function __construct($action = "index"){
		if ($action == "index") {return $this->index();} // Нет нужного метода
	}

	public function index (){
		$data['pageTitle'] = "Home page";
		HeaderController::$data ['pageTitle'] = "Welcome to my blog!";
		HeaderController::$tpl = 'header_home.tpl.php';
		$this->content =  self::render ('homepage.tpl.php', $data);
	}

/*
|
|	Вывод страницы
| 
*/
	function getContent () {return $this->content;}

}