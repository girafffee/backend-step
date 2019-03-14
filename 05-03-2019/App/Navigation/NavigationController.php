<?php
namespace App\Navigation;

/**
 * 
 */
class NavigationController extends \Kernel\Base\BaseController
{
	var $Model;
	var $content;
	var $menuName;


	function __construct($menuName = "MainMenu"){
		$this->menuName = $menuName;
	}

	function buildMenu(){
		$this->Model = new NavigationModel();

		// TODO: поставить вызов функции в зависимости от имени

		if ($this->menuName == "MainMenu")
			$this->Model->createMainMenu();
		if ($this->menuName == "FooterMenu")
			$this->Model->createFooterMenu();

		$this->content = self::render(strtolower($this->menuName) . '.tpl.php', $this->Model->arrMenu);
		return $this->content;
	}


	function getContent () {return $this->content;}

}