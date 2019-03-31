<?php
namespace App\Page;

/**
 * 
 */
class PageController 
{
	var $Model;
	var $content;
	function __construct($action = "index", $arg = '1'){
		// var_dump($arg);
        if (isset($arg["page_id"])) $page_id = $arg["page_id"];


		$this->Model=new PageModel ();
		if ($action == "index" && isset($page_id))
				$this->content = $this->Model->getPage($page_id);
        else
            $this->content = "<h3> No Action </h3>";
	}

	function getContent () {return $this->content;}

}