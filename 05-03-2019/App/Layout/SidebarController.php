<?php
namespace App\Layout;

/**
 * 
 */
class SidebarController extends \Kernel\Base\BaseController
{
	public static function getContent () {
		//$barMenu = new \App\Navigation\NavigationController();
		//return self::render ('sidebar.tpl.php', $barMenu->buildMenu() );
		return "";
	}
}