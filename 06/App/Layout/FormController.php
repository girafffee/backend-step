<?php
namespace App\Layout;
use Kernel\Base\BaseController;
/**
 * 
 */
class FormController extends BaseController
{
	public static $data;

	public static function buildContentData (){
		if (!isset(self::$data ['formTitle']))
			self::$data ['formTitle'] = "First template";
	}

	public static function getContent () {
		return self::render ('content.tpl.php', self::$data);
	}
}