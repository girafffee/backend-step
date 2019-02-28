<?php
namespace App\Layout;
use App\Config;

/**
 * 
 */
class HeadController extends \Kernel\Base\BaseController
{
	public static $data;

	public static function buildHeadData (){
		self::$data ['title'] = Config::$appSiteName;
	}


	public static function getContent () {
		self::buildHeadData();
		return self::render ('head.tpl.php', self::$data);
	}
}
