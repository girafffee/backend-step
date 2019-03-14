<?php
namespace App\Layout;
use App\Navigation\NavController;

/**
 * 
 */
class HeaderController  extends \Kernel\Base\BaseController
{
	public static $data;
	public static $tpl;

	public static function buildHeadData (){
		$mainMenu = new NavController();
		self::$data['mainMenu'] = $mainMenu->buildMenu();
		if (!isset(self::$data ['pageTitle']))
			self::$data ['pageTitle'] = "First template";
	}


	public static function getContent () {
		self::buildHeadData();
		return self::render (self::$tpl, self::$data);
	}
}

HeaderController::$tpl = "header.tpl.php";