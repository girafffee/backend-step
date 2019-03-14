<?php
namespace App\Page;

/**
 * 
 */
class PageController 
{
	var $Model;
	var $content;
	function __construct($action = "index", $arg){
		// var_dump($arg);
		if (isset($arg["page_id"])) $page_id = $arg["page_id"];



		$this->Model=new PageModel ();
		if ($action == "index") { $this->content = $this->Model->getPageByID($page_id);}
	}

	function getContent () {return $this->content;}

}