<?php
namespace App\Navigation;

/**
 * 
 */
class NavigationController extends \Kernel\Base\BaseController
{
	public $Model;
	private $content;
	private $menuName;
	//private $createMenu;

	function __construct($menuName = "MainMenu"){
		$this->menuName = $menuName;
	}

	function buildMenu(){
		$this->Model = new NavigationModel();

		// TODO: поставить вызов функции в зависимости от имени
		$createMenu = 'create'. $this->menuName;
		
		//try
		//Проверяем наличие функции	
			if(!function_exists($this->Model->$createMenu()))
				//Если такой не найдется, то обрабатываем исключение
				//throw new Exception("Error Processing Request");
				echo '';
			else
				$this->Model->$createMenu();
			 
			
		//Пытаемя вызвать заданую функцию
		
		/*
		try{
			$this->Model->$createMenu();
		}	//При неудаче срабатывает catch 
		catch(\Exeption $e){
			die($e->__toString() );
		}
		*/



		/*
		if(function_exists($this->Model->$createMenu()))
			$this->Model->$createMenu();		
		else
			echo "111 ";
		*/ 


		$this->content = self::render(strtolower($this->menuName) . '.tpl.php', $this->Model->arrMenu);
		return $this->content;
	}


	function getContent () {return $this->content;}

}