<?php
namespace App\Homepage;
use App\Layout\HeaderController;

/**
 * 
 */
class HomepageController  extends \Kernel\Base\BaseController
{
	var $Model;

	function __construct($action = "index"){
		if ($action == "index") { $this->index(); return; };
	}

	public function index (){
		$data['pageTitle'] = "Home Page";
		HeaderController::$data ['pageTitle'] = " Welcome to my Site";
		HeaderController::$tpl = 'header_home.tpl.php';
		$this->content =  self::render ('homepage.tpl.php', $data);
	}

/*
|--------------------------------------------------------------------------
| Информация, которую вернет мой контроллер
|--------------------------------------------------------------------------
|
*/
	var $content;
	function getContent () {return $this->content;}

}