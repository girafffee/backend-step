<?php
namespace App\Homepage;
use App\Layout\HeadController;
use App\Layout\HeaderController;
use Kernel\Base\BaseController;


/**
 * 
 */
class HomepageController  extends BaseController
{
	var $Model;

	function __construct($action = "index"){
		if ($action == "index") {
		    $this->index();
		    return;
		}

	}

	public function index (){
        $this->Model = new HomepageModel();
		HeaderController::$data ['pageTitle'] = "Welcome to my Site";
		HeaderController::$tpl = 'header_home.tpl';
		HeadController::$data['title'] = 'Homepage';
		$data = $this->Model->getPage("home");
		$this->content =  $data['body'];
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