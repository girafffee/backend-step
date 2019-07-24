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
			self::$data ['pageTitle'] = "My Slogan";
		if(!isset(self::$tpl))
		    self::$tpl = 'header.tpl';
	}


	public static function getContent () {
		self::buildHeadData();
		return self::render (self::$tpl, self::$data, 'header');
	}
}