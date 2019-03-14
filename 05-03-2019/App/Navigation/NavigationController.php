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

	function __construct($menuName = "main"){
		$this->menuName = $menuName;
	}

	function buildMenu(){
		$this->Model = new NavigationModel();
		if($this->menuName == 'main')
			$this->Model->createSimpleMenu();
		if($this->menuName == 'footer')
			$this->Model->createFooterMenu();
		
		$this->content = self::render(strtolower($this->menuName).'menu.tpl.php', $this->Model->arrMenu);
		return $this->content;
	}


	function getContent () {return $this->content;}

}