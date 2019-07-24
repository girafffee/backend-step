<?php
namespace Kernel\Base;
use App\Config;
use Kernel\Lib\SmartyGir;

/**
 * 
 */
class BaseController extends SmartyGir
{

	public static function render ($tplPath, $data = '', $config = ''){

        parent::RenderSmarty($tplPath, $data, $config);

	    // включаем буфер
		ob_start();

		parent::display();

        // сохраняем всё что есть в буфере в переменную $content
        $content = ob_get_contents();
		
		// отключаем и очищаем буфер
		ob_end_clean();

		return $content;
	}


	
}