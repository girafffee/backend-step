<?php
namespace App\Page;

/**
 * 
 */
class PageModel
{
	
	function __construct(){
		echo "Page Model";
	}

	function getPageByID ($id){
		switch ($id) {
			case '1':
			return " Данные страницы 1 ";
				break;

			case '2':
			return " Данные страницы 2 ";
				break;
			
			default:
			return " Нет данных "; // TODO Error 404 or HomePage
				break;
		}
	}


}