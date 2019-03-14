<?php
namespace App\Navigation; 

/**
 * 
 */
	
class NavController extends \Kernel\Base\BaseController
{
	public $Model;
	public $content;
	public $menuName;

	function __construct($menuName = "mainMenu"){
		$this->menuName = $menuName;
		
	}

	function buildMenu(){
		$this->Model = new NavModel();
		$this->Model->createSimpleMenu();
		$this->content = self::render('mainmenu.tpl.php', $this->Model->arrMenu);
		return $this->content;
	}

	function getContent () {return $this->content;}

}