<?php
namespace App\Page; 

/**
 * 
 */
class PageController 
{
	var $Model;
	var $content;
	function __construct($page_id, $action = "index"){
		$this->Model = new PageModel ();

		if ($action == "index")
			$data = $this->Model->getPageByID($page_id);
		    $this->content = $data;
	}

	function getHrefController($href, $id){
		switch ($href) {
			case 'page':
			return new PageController ($id);
				break;

			default:
			return new PageController ("0"); // TODO Error 404 or HomePage
				break;
		}
		
	}

	function getContent () {return $this->content;}

}