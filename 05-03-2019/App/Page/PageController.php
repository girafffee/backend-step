<?php
namespace App\Page;

/**
 * 
 */
class PageController 
{
	var $Model;
	var $content;
	function __construct($action = "index", $page_id = 0){

		$this->Model=new PageModel ();
		if ($action == "index") { $this->content = $this->Model->getPageByID($page_id);}
	}

	function getContent () {return $this->content;}

}