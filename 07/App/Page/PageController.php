<?php
namespace App\Page;

use App\Layout\HeadController;
use Kernel\Base\BaseController;

/**
 * 
 */
class PageController extends BaseController
{
	public $content = "", $Model, $title;

	function __construct($action = "index", $arg = 1){

        if (isset($arg["page_id"])) $page_id = $arg["page_id"];

		$this->Model = new PageModel ();
		if ($action == "index" && isset($page_id)) {
		    //Назначаем шаблон всех страниц
            parent::$tpl = 'page.tpl';
            //Сохраняем название страницы

            /*if(parent::isCached(parent::$tpl, $page_id))*/
                // Получаем страницу из базы по ID либо Slug
            $this->content = $this->Model->getPage($page_id);

            /**
             * Выводим содержимое на страницу
             *
             *  I. Файл шаблона. Из директория указана в классе Config
             * под переменной -> $pathToTemplate
             *
             *  II. Данные из базы, в этом случае - получение страниц.
             *
             *  III. Название конф. файла и при необходимости - секция.
             * Записывать в формате: 'файл|секция' либо  'файл'
             *
             *  IV. Уникальный slug либо id шаблона.
             *
             */
            $this->content = self::render(parent::$tpl, $this->content, 'header|meta', $page_id);

        }
        else
            $this->content = "<h3> No Action </h3>";


        /**
         * Кастомный Title
         *
         * $print_id = принимает boolean
         * Отвечает за вывод номера страницы в отсутствие ее названия
         * false    -> только глобальное название сайта
         * true     -> Page #номер и глобальное название сайта
         */
        HeadController::$data['title'] = parent::setTitle(true);

        //HeadController::assignPublic('title',  HeadController::$data['title']);
	}

	public function getContent() {return $this->content;}



}