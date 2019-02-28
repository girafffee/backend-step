<?php
namespace App\Layout;

/**
 * 
 */
class HeaderController  extends \Kernel\Base\BaseController
{
	public static $data;

	public static function buildHeadData (){
		if (!isset(self::$data ['pageTitle']))
			self::$data ['pageTitle'] = "First template";
	}


	public static function getContent () {
		self::buildHeadData();
		return self::render ('header.tpl.php', self::$data);
	}
}