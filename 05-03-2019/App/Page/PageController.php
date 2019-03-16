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
		if (isset($arg["page"])) $page = $arg["page"];


		$this->Model=new PageModel ();
		if ($action == "index" && isset($page)) { 
				$this->content = $this->Model->getPage($page);


		}
	}

	function getContent () {return $this->content;}

}