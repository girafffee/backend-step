<?php
namespace App\Navigation;
use App\Config;

/*
|--------------------------------------------------------------------------
| 
|--------------------------------------------------------------------------
| 
| 
|
*/


/**
 * 
 */
class NavModel
{
	public $arrMenu;
	
	public function createSimpleMenu(){
		/*

			$this->arrMenu[1]['controller'] = ""; //Какой контроллер вызываем
			$this->arrMenu[1]['action'] = ""; //Метод контроллера
			$this->arrMenu[1]['arg'] = array('page_id' => 1); //Доступные аргументы
			$this->arrMenu[1]['slug'] = ""; // SEO ссылка
			$this->arrMenu[1]['target'] = "_top"; // Метод открытия ссылки
			$this->arrMenu[1]['js'] = array('onclick' => ''); // Привязать обработку скриптов
			$this->arrMenu[1]['class'] = ""; // css class
			$this->arrMenu[1]['id'] = ""; // css id
			$this->arrMenu[1]['text'] = ""; // Текст ссылки
			$this->arrMenu[1]['hasChildren'] = false;
			$this->arrMenu[1]['parentId'] = 0;

		*/

		//---HOME----//
			$this->arrMenu[1]['controller'] = "HomeController"; //Какой контроллер вызываем
			$this->arrMenu[1]['action'] = "index"; //Метод контроллера
			//$this->arrMenu[1]['arg'] = array('page_id' => 1); //Доступные аргументы
			$this->arrMenu[1]['slug'] = "/"; // SEO ссылка
			$this->arrMenu[1]['target'] = "_top"; // Метод открытия ссылки
			//$this->arrMenu[1]['js'] = array('onclick' => ''); // Привязать обработку скриптов
			//$this->arrMenu[1]['class'] = ""; // css class
			//$this->arrMenu[1]['id'] = ""; // css id
			$this->arrMenu[1]['text'] = "Home"; // Текст ссылки
			$this->arrMenu[1]['hasChildren'] = false;
			$this->arrMenu[1]['parentId'] = 0;

		//---ABOUT----//
			$this->arrMenu[2]['controller'] = "PageController"; //Какой контроллер вызываем
			$this->arrMenu[2]['action'] = "index"; //Метод контроллера
			$this->arrMenu[2]['arg'] = array('page_id' => 1); //Доступные аргументы
			$this->arrMenu[2]['slug'] = "/"; // SEO ссылка
			$this->arrMenu[2]['target'] = "_top"; // Метод открытия ссылки
			//$this->arrMenu[1]['js'] = array('onclick' => ''); // Привязать обработку скриптов
			//$this->arrMenu[1]['class'] = ""; // css class
			//$this->arrMenu[1]['id'] = ""; // css id
			$this->arrMenu[2]['text'] = "About"; // Текст ссылки
			$this->arrMenu[2]['hasChildren'] = false;
			$this->arrMenu[2]['parentId'] = 0;

		//---SERVICES----//
			$this->arrMenu[3]['controller'] = "PageController"; //Какой контроллер вызываем
			$this->arrMenu[3]['action'] = "index"; //Метод контроллера
			$this->arrMenu[3]['arg'] = array('page_id' => 2); //Доступные аргументы
			$this->arrMenu[3]['slug'] = "/"; // SEO ссылка
			$this->arrMenu[3]['target'] = "_top"; // Метод открытия ссылки
			//$this->arrMenu[1]['js'] = array('onclick' => ''); // Привязать обработку скриптов
			//$this->arrMenu[1]['class'] = ""; // css class
			//$this->arrMenu[1]['id'] = ""; // css id
			$this->arrMenu[3]['text'] = "Services"; // Текст ссылки
			$this->arrMenu[3]['hasChildren'] = false;
			$this->arrMenu[3]['parentId'] = 0;

		//---CONTACT FORM----//
			$this->arrMenu[4]['controller'] = "contactform"; //Какой контроллер вызываем
			$this->arrMenu[4]['action'] = "index"; //Метод контроллера
			//$this->arrMenu[2]['arg'] = array('page_id' => 2); //Доступные аргументы
			$this->arrMenu[4]['slug'] = "/contact.html"; // SEO ссылка
			$this->arrMenu[4]['target'] = "_top"; // Метод открытия ссылки
			//$this->arrMenu[1]['js'] = array('onclick' => ''); // Привязать обработку скриптов
			//$this->arrMenu[1]['class'] = ""; // css class
			//$this->arrMenu[1]['id'] = ""; // css id
			$this->arrMenu[4]['text'] = "Contact"; // Текст ссылки
			$this->arrMenu[4]['hasChildren'] = false;
			$this->arrMenu[4]['parentId'] = 0;

	}


}