<?php
namespace App\Page;
use App\Config;

/**
 * 
 */
class PageModel
{

/*
|--------------------------------------------------------------------------
| Чтение подготовленной страницы 
|--------------------------------------------------------------------------
| Читает страницу и возвращает ее содержимое
| 
|
*/	
	function getContentPageFromFile ($fileName){
		// включаем буфер
		ob_start();
		include (Config::$pathToStorage . 'pages/' . $fileName); 

		// сохраняем всё что есть в буфере в переменную $content
		$content = ob_get_contents();
		
		// отключаем и очищаем буфер
		ob_end_clean();

		return $content;
	}


/*
|--------------------------------------------------------------------------
| Взять страницу по номеру 
|--------------------------------------------------------------------------
| Анализирует, какую страницу хочет увидеть пользователь
| Читает ее содержимое из файла и возвращает ее контроллеру
|
*/	
	
	function getPageByID ($id){

		// ToDo: Переписать, с попыткой включитьф айл- еслиф айла нет - вернуть 404
		// HowTo:
		// 0. Создать файл 404.php
		// 1. проверить на наличие файла 
		// 2. Если файл есть,включить его
		// 3. Если файла нет - вернуть 404.php

		switch ($id) {
			case '1':
			return $this->getContentPageFromFile('1.php');
				break;

			case '2':
			return  $this->getContentPageFromFile('2.php');
				break;

			case '3':
			return  $this->getContentPageFromFile('3.php');
				break;

			case '4':
			return  $this->getContentPageFromFile('4.php');
				break;

			case '5':
			return  $this->getContentPageFromFile('5.php');
				break;
			
			default:
			return ' <h1 class="alert alert-danger" role="alert"> Error 404</h1> '; // TODO Error 404 or HomePage
				break;
		}
	}


}