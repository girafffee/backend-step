<?php
namespace App\Page;
use App\Config;

/**
 * 
 */
class PageModel
{
	function getPageFile ($file){
				// включаем буфер
		ob_start();
		include (Config::$pathToStorage .'pages/'. $file); 

		// сохраняем всё что есть в буфере в переменную $content
		$content = ob_get_contents();
		
		// отключаем и очищаем буфер
		ob_end_clean();

		return $content;
	}


	function getPageByID ($id){
		switch ($id) {
			case "1":
			return $this->getPageFile('about.php');
				break;

			case "2":
			return $this->getPageFile('blog.php');
				break;

			case '3':
			return $this->getPageFile('services.php');
				break;

			case '4':
			return $this->getPageFile('works.php');
				break;
			
			default:
			return " Нет данных "; // TODO Error 404 or HomePage
				break;
		}
	}


}