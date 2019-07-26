<?php
namespace App\Layout;

use App\Navigation\NavigationController;
use Kernel\Base\BaseController;

/**
 * 
 */
class FooterController extends BaseController
{
	public static $data, $tpl;

	public static function buildFooterData (){
		$footerMenu = new NavigationController('FooterMenu');
		self::$data['footerMenu'] = $footerMenu->buildMenu();
	}


	public static function getContent () {
		self::buildFooterData();
		self::$tpl = 'footer.tpl';
		return self::render (self::$tpl, self::$data);
	}
}
