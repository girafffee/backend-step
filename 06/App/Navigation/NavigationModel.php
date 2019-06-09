<?php
namespace App\Navigation;


/*
|--------------------------------------------------------------------------
| 
|--------------------------------------------------------------------------
| 

 */

use Kernel\Base\BaseModel;

class NavigationModel extends BaseModel
{
	public $arrMenu;
	public function __construct(){
	    $this->table = "header_nav_links";
	    $this->hasOne("pages", "id", "slug_page");
    }

    public function createFooterMenu(){

	// Warrenty
		$this->arrMenu[1]['controller'] = "PageController"; // Какой контроллер вызывается
		$this->arrMenu[1]['action'] = "index"; // Метод контроллера
		$this->arrMenu[1]['arg'] =  array('page_id' => 4); // Доступные аргументы
		$this->arrMenu[1]['slug'] = "warrenty.html"; // SEO ссылка (или ссылка на внешний источник)
		$this->arrMenu[1]['target'] ="_top"; // как открыть ссылку (в новом окне или фрейме) 
		//$this->arrMenu[1]['js'] =  array('onclick' => ''); // Привязать обработку скриптов
		//$this->arrMenu[1]['class'] = ""; // css class
		//$this->arrMenu[1]['id'] = ""; // css id
		$this->arrMenu[1]['text'] = "Warrenty"; // Текст ссылк, который нужно будет вывести
		$this->arrMenu[1]['hasCildren'] = false; // Есть ли вложенные элементы
		$this->arrMenu[1]['parentId'] = 0; // Предок (0 если нет)

	// Terms of Conditions
		$this->arrMenu[2]['controller'] = "PageController"; // Какой контроллер вызывается
		$this->arrMenu[2]['action'] = "index"; // Метод контроллера
		$this->arrMenu[2]['arg'] =  array('page_id' => 5); // Доступные аргументы
		$this->arrMenu[2]['slug'] = "toc.html"; // SEO ссылка (или ссылка на внешний источник)
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
		$this->arrMenu[3]['slug'] = "about"; // SEO ссылка (или ссылка на внешний источник)
		$this->arrMenu[3]['target'] ="_top"; // как открыть ссылку (в новом окне или фрейме) 
		//$this->arrMenu[3]['js'] =  array('onclick' => ''); // Привязать обработку скриптов
		//$this->arrMenu[3]['class'] = ""; // css class
		//$this->arrMenu[3]['id'] = ""; // css id
		$this->arrMenu[3]['text'] = "About"; // Текст ссылк, который нужно будет вывести
		$this->arrMenu[3]['hasCildren'] = false; // Есть ли вложенные элементы
		$this->arrMenu[3]['parentId'] = 0; // Предок (0 если нет)

	// Contacts
		$this->arrMenu[4]['controller'] = "contactform"; // Какой контроллер вызывается
		$this->arrMenu[4]['action'] = "index"; // Метод контроллера
		//$this->arrMenu[4]['arg'] =  array('page_id' => 1); // Доступные аргументы
		$this->arrMenu[4]['slug'] = "contact.html"; // SEO ссылка (или ссылка на внешний источник)
		$this->arrMenu[4]['target'] ="_top"; // как открыть ссылку (в новом окне или фрейме) 
		//$this->arrMenu[4]['js'] =  array('onclick' => ''); // Привязать обработку скриптов
		//$this->arrMenu[4]['class'] = ""; // css class
		//$this->arrMenu[4]['id'] = ""; // css id
		$this->arrMenu[4]['text'] = "Contacts"; // Текст ссылк, который нужно будет вывести
		$this->arrMenu[4]['hasCildren'] = false; // Есть ли вложенные элементы
		$this->arrMenu[4]['parentId'] = 0; // Предок (0 если нет)


	}

	public function createMainMenu(){

	    $ret = $this->SelectWhat([
                "id"            => $this->table . ".id",
                "text"          => $this->table . ".name",
                "controller"    => $this->table . ".controller",
                "action"        => $this->table . ".action",
                "slug"          => $this->hasOne[0][0] . ".slug",
                "body"          => $this->hasOne[0][0] . ".body",
                "status"        => $this->hasOne[0][0] . ".status",
                "hasCildren"    => $this->table . ".hasCildren",
                "parentId"      => $this->table . ".parentId"
            ])
            ->Get();

	    while($row = $ret->fetch_assoc())
	        $this->arrMenu[] = $row;


	    /*echo'<pre>';
	    var_dump($this->arrMenu);
        echo'</pre>';*/

	}
	

}