<?php
namespace App\Layout;
use \App\Navigation\NavigationController;

/**
 * 
 */
class HeaderController  extends \Kernel\Base\BaseController
{
	public static $data;
	public static $tpl;

	public static function buildHeadData (){
		$mainMenu = new NavigationController('MainMenu');
		self::$data['mainMenu'] = $mainMenu->buildMenu();
		
		if (!isset(self::$data ['pageTitle']))
			self::$data ['pageTitle'] = " My Slogan ";
	}


	public static function getContent () {
		self::buildHeadData();
		return self::render (self::$tpl, self::$data);
	}
}
HeaderController::$tpl = 'header.tpl.php';