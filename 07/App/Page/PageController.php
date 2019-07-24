<?php
namespace App\Page;

use Kernel\Base\BaseController;

/**
 * 
 */
class PageController extends BaseController
{
	var $Model;
	var $content;
	public static $tpl;
	function __construct($action = "index", $arg = 1){

        if (isset($arg["page_id"])) $page_id = $arg["page_id"];

		$this->Model = new PageModel ();
		if ($action == "index" && isset($page_id)) {
		    //Назначаем шаблон всех страниц
            self::$tpl = 'page.tpl';

		    // Получаем страницу из базы по ID либо Slug
            $data = $this->Model->getPage($page_id);
            // Выводим содержимое на страницу
            $this->content = $data['body'];
        }
        else
            $this->content = "<h3> No Action </h3>";
        $this->content = self::render(self::$tpl, $this->content);
	}

	function getContent() {return $this->content;}

}