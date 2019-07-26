<?php
namespace App\Layout;
use App\Config;
use Kernel\Base\BaseController;

/**
 * 
 */
class HeadController extends BaseController
{
	public static $data;

	public static function buildHeadData (){
		//self::$data ['title'] = "Custom Title for all Pages";
	}


	public static function getContent () {
		self::buildHeadData();

		return self::render ('head.tpl', self::$data, 'header|meta', self::$data['title']);
	}
}
