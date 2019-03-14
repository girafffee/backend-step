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
class NavigationModel
{
	var $arrMenu;

/*
|--------------------------------------------------------------------------
| 
|--------------------------------------------------------------------------
| 
| 
|
*/	




/*
|--------------------------------------------------------------------------
| 
|--------------------------------------------------------------------------
| 
| 
|
*/		public function createFooterMenu(){

	// About
		$this->arrMenu[1]['controller'] = "PageController"; // Какой контроллер вызывается
		$this->arrMenu[1]['action'] = "index"; // Метод контроллера
		$this->arrMenu[1]['arg'] =  array('page_id' => 4); // Доступные аргументы
		$this->arrMenu[1]['slug'] = "/warrenty.html"; // SEO ссылка (или ссылка на внешний источник)
		$this->arrMenu[1]['target'] ="_top"; // как открыть ссылку (в новом окне или фрейме) 
		//$this->arrMenu[1]['js'] =  array('onclick' => ''); // Привязать обработку скриптов
		//$this->arrMenu[1]['class'] = ""; // css class
		//$this->arrMenu[1]['id'] = ""; // css id
		$this->arrMenu[1]['text'] = "Warrenty"; // Текст ссылк, который нужно будет вывести
		$this->arrMenu[1]['hasCildren'] = false; // Есть ли вложенные элементы
		$this->arrMenu[1]['parentId'] = 0; // Предок (0 если нет)

	// About
		$this->arrMenu[2]['controller'] = "PageController"; // Какой контроллер вызывается
		$this->arrMenu[2]['action'] = "index"; // Метод контроллера
		$this->arrMenu[2]['arg'] =  array('page_id' => 5); // Доступные аргументы
		$this->arrMenu[2]['slug'] = "/toc.html"; // SEO ссылка (или ссылка на внешний источник)
		$this->arrMenu[2]['target'] ="_top"; // как открыть ссылку (в новом окне или фрейме) 
		//$this->arrMenu[2]['js'] =  array('onclick' => ''); // Привязать обработку скриптов
		//$this->arrMenu[2]['class'] = ""; // css class
		//$this->arrMenu[2]['id'] = ""; // css id
		$this->arrMenu[2]['text'] = "Terms of Conditions"; // Текст ссылк, который нужно будет вывести
		$this->arrMenu[2]['hasCildren'] = false; // Есть ли вложенные элементы
		$this->arrMenu[2]['parentId'] = 0; // Предок (0 если нет)

	// About
		$this->arrMenu[3]['controller'] = "PageController"; // Какой контроллер вызывается
		$this->arrMenu[3]['action'] = "index"; // Метод контроллера
		$this->arrMenu[3]['arg'] =  array('page_id' => 1); // Доступные аргументы
		$this->arrMenu[3]['slug'] = "/about.html"; // SEO ссылка (или ссылка на внешний источник)
		$this->arrMenu[3]['target'] ="_top"; // как открыть ссылку (в новом окне или фрейме) 
		//$this->arrMenu[3]['js'] =  array('onclick' => ''); // Привязать обработку скриптов
		//$this->arrMenu[3]['class'] = ""; // css class
		//$this->arrMenu[3]['id'] = ""; // css id
		$this->arrMenu[3]['text'] = "About"; // Текст ссылк, который нужно будет вывести
		$this->arrMenu[3]['hasCildren'] = false; // Есть ли вложенные элементы
		$this->arrMenu[3]['parentId'] = 0; // Предок (0 если нет)

	// About
		$this->arrMenu[4]['controller'] = "contactform"; // Какой контроллер вызывается
		$this->arrMenu[4]['action'] = "index"; // Метод контроллера
		//$this->arrMenu[4]['arg'] =  array('page_id' => 1); // Доступные аргументы
		$this->arrMenu[4]['slug'] = "/contact.html"; // SEO ссылка (или ссылка на внешний источник)
		$this->arrMenu[4]['target'] ="_top"; // как открыть ссылку (в новом окне или фрейме) 
		//$this->arrMenu[4]['js'] =  array('onclick' => ''); // Привязать обработку скриптов
		//$this->arrMenu[4]['class'] = ""; // css class
		//$this->arrMenu[4]['id'] = ""; // css id
		$this->arrMenu[4]['text'] = "Contacts"; // Текст ссылк, который нужно будет вывести
		$this->arrMenu[4]['hasCildren'] = false; // Есть ли вложенные элементы
		$this->arrMenu[4]['parentId'] = 0; // Предок (0 если нет)


	}

	public function createMainMenu(){
/*
		$this->arrMenu[1]['controller'] = ""; // Какой контроллер вызывается
		$this->arrMenu[1]['action'] = ""; // Метод контроллера
		$this->arrMenu[1]['arg'] =  array('page_id' => 1); // Доступные аргументы
		$this->arrMenu[1]['slug'] = ""; // SEO ссылка (или ссылка на внешний источник)
		$this->arrMenu[1]['target'] ="_top"; // как открыть ссылку (в новом окне или фрейме) 
		$this->arrMenu[1]['js'] =  array('onclick' => ''); // Привязать обработку скриптов
		$this->arrMenu[1]['class'] = ""; // css class
		$this->arrMenu[1]['id'] = ""; // css id
		$this->arrMenu[1]['text'] = ""; // Текст ссылк, который нужно будет вывести
		$this->arrMenu[1]['hasCildren'] = false; // Есть ли вложенные элементы
		$this->arrMenu[1]['parentId'] = 0; // Предок (0 если нет)
*/
	// Home
		$this->arrMenu[1]['controller'] = "HomepageController"; // Какой контроллер вызывается
		$this->arrMenu[1]['action'] = "index"; // Метод контроллера
		// $this->arrMenu[1]['arg'] =  array('page_id' => 1); // Доступные аргументы
		$this->arrMenu[1]['slug'] = str_replace ("index.php", "", $_SERVER["PHP_SELF"]); // SEO ссылка (или ссылка на внешний источник)
		$this->arrMenu[1]['target'] ="_top"; // как открыть ссылку (в новом окне или фрейме) 
		//$this->arrMenu[1]['js'] =  array('onclick' => ''); // Привязать обработку скриптов
		//$this->arrMenu[1]['class'] = ""; // css class
		//$this->arrMenu[1]['id'] = ""; // css id
		$this->arrMenu[1]['text'] = "Home"; // Текст ссылк, который нужно будет вывести
		$this->arrMenu[1]['hasCildren'] = false; // Есть ли вложенные элементы
		$this->arrMenu[1]['parentId'] = 0; // Предок (0 если нет)

	// About
		$this->arrMenu[2]['controller'] = "PageController"; // Какой контроллер вызывается
		$this->arrMenu[2]['action'] = "index"; // Метод контроллера
		$this->arrMenu[2]['arg'] =  array('page_id' => 1); // Доступные аргументы
		$this->arrMenu[2]['slug'] = "about.html"; // SEO ссылка (или ссылка на внешний источник)
		$this->arrMenu[2]['target'] ="_top"; // как открыть ссылку (в новом окне или фрейме) 
		//$this->arrMenu[2]['js'] =  array('onclick' => ''); // Привязать обработку скриптов
		//$this->arrMenu[2]['class'] = ""; // css class
		//$this->arrMenu[2]['id'] = ""; // css id
		$this->arrMenu[2]['text'] = "About"; // Текст ссылк, который нужно будет вывести
		$this->arrMenu[2]['hasCildren'] = false; // Есть ли вложенные элементы
		$this->arrMenu[2]['parentId'] = 0; // Предок (0 если нет)

	// Service
		$this->arrMenu[3]['controller'] = "PageController"; // Какой контроллер вызывается
		$this->arrMenu[3]['action'] = "index"; // Метод контроллера
		$this->arrMenu[3]['arg'] =  array('page_id' => 2); // Доступные аргументы
		$this->arrMenu[3]['slug'] = "/service.html"; // SEO ссылка (или ссылка на внешний источник)
		$this->arrMenu[3]['target'] ="_top"; // как открыть ссылку (в новом окне или фрейме) 
		//$this->arrMenu[3]['js'] =  array('onclick' => ''); // Привязать обработку скриптов
		//$this->arrMenu[3]['class'] = ""; // css class
		//$this->arrMenu[3]['id'] = ""; // css id
		$this->arrMenu[3]['text'] = "Service"; // Текст ссылк, который нужно будет вывести
		$this->arrMenu[3]['hasCildren'] = false; // Есть ли вложенные элементы
		$this->arrMenu[3]['parentId'] = 0; // Предок (0 если нет)	

	// Shop
		$this->arrMenu[4]['controller'] = "PageController"; // Какой контроллер вызывается
		$this->arrMenu[4]['action'] = "index"; // Метод контроллера
		$this->arrMenu[4]['arg'] =  array('page_id' => 3); // Доступные аргументы
		$this->arrMenu[4]['slug'] = "/shop.html"; // SEO ссылка (или ссылка на внешний источник)
		$this->arrMenu[4]['target'] ="_top"; // как открыть ссылку (в новом окне или фрейме) 
		//$this->arrMenu[4]['js'] =  array('onclick' => ''); // Привязать обработку скриптов
		//$this->arrMenu[4]['class'] = ""; // css class
		//$this->arrMenu[4]['id'] = ""; // css id
		$this->arrMenu[4]['text'] = "Shop"; // Текст ссылк, который нужно будет вывести
		$this->arrMenu[4]['hasCildren'] = true; // Есть ли вложенные элементы
		$this->arrMenu[4]['parentId'] = 0; // Предок (0 если нет)	

		// Shop
			$this->arrMenu[6]['controller'] = "PageController"; // Какой контроллер вызывается
			$this->arrMenu[6]['action'] = "index"; // Метод контроллера
			$this->arrMenu[6]['arg'] =  array('page_id' => 3); // Доступные аргументы
			$this->arrMenu[6]['slug'] = "/shop2.html"; // SEO ссылка (или ссылка на внешний источник)
			$this->arrMenu[6]['target'] ="_top"; // как открыть ссылку (в новом окне или фрейме) 
			//$this->arrMenu[6]['js'] =  array('onclick' => ''); // Привязать обработку скриптов
			//$this->arrMenu[6]['class'] = ""; // css class
			//$this->arrMenu[6]['id'] = ""; // css id
			$this->arrMenu[6]['text'] = "Catalog"; // Текст ссылк, который нужно будет вывести
			$this->arrMenu[6]['hasCildren'] = false; // Есть ли вложенные элементы
			$this->arrMenu[6]['parentId'] = 4; // Предок (0 если нет)	

	// Contact Form
		$this->arrMenu[5]['controller'] = "contactform"; // Какой контроллер вызывается
		$this->arrMenu[5]['action'] = "index"; // Метод контроллера
		//$this->arrMenu[5]['arg'] =  array('page_id' => 2); // Доступные аргументы
		$this->arrMenu[5]['slug'] = "contact.html"; // SEO ссылка (или ссылка на внешний источник)
		$this->arrMenu[5]['target'] ="_top"; // как открыть ссылку (в новом окне или фрейме) 
		//$this->arrMenu[5]['js'] =  array('onclick' => ''); // Привязать обработку скриптов
		//$this->arrMenu[5]['class'] = ""; // css class
		//$this->arrMenu[5]['id'] = ""; // css id
		$this->arrMenu[5]['text'] = "Contact"; // Текст ссылк, который нужно будет вывести
		$this->arrMenu[5]['hasCildren'] = false; // Есть ли вложенные элементы
		$this->arrMenu[5]['parentId'] = 0; // Предок (0 если нет)	




	}
	



}