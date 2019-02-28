<?php
namespace App\Page;

/**
 * 
 */
class PageController 
{
	var $Model;
	var $content;
	function __construct($action = "none", $page_id = 0){
		if ($action == "none") return; // Нет нужного метода

		$this->Model=new PageModel ();

		if ($action == "show") { $this->content = $this->Model->getPageByID($page_id);}
	}

	function getContent () {return $this->content;}

}