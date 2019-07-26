<?php
namespace App\Page;

use App\Layout\HeadController;
use Kernel\Base\BaseController;
use Kernel\Lib\SmartyGir;

/**
 * 
 */
class PageController extends BaseController
{
	public $Model, $content, $title;

	function __construct($action = "index", $arg = 1){

        if (isset($arg["page_id"])) $page_id = $arg["page_id"];

		$this->Model = new PageModel ();
		if ($action == "index" && isset($page_id)) {
		    //Назначаем шаблон всех страниц
            parent::$tpl = 'page.tpl';
            //Сохраняем название страницы


		    // Получаем страницу из базы по ID либо Slug
            $data = $this->Model->getPage($page_id);
            // Выводим содержимое на страницу
            $this->content = $data;

        }
        else
            $this->content = "<h3> No Action </h3>";
        $this->content = self::render(parent::$tpl, $this->content, 'header|meta', $data['slug']);
        HeadController::$data['title'] = parent::setTitle(true);

        //HeadController::assignPublic('title',  HeadController::$data['title']);
	}

	public function getContent() {return $this->content;}



}