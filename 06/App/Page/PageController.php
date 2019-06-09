<?php
namespace App\Page;

/**
 * 
 */
class PageController 
{
	var $Model;
	var $content;
	function __construct($action = "index", $arg = 1){
		// var_dump($arg);
        if (isset($arg["page_id"])) $page_id = $arg["page_id"];


		$this->Model = new PageModel ();
		if ($action == "index" && isset($page_id)) {
		    // Получаем страницу из базы по ID либо Slug
            $data = $this->Model->getPage($page_id);
            // Выводим содержимое на страницу
            $this->content = $data['body'];
        }
        else
            $this->content = "<h3> No Action </h3>";
	}

	function getContent () {return $this->content;}

}