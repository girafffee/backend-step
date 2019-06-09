<?php
namespace App\Page;
use Kernel\Base\BaseModel;


/**
 * 
 */
class PageModel extends BaseModel
{

    function __construct(){
        $this->table = "pages";
    }
    /*
    |--------------------------------------------------------------------------
    | Взять страницу по id OR slug
    |--------------------------------------------------------------------------
    | Анализирует, каким образом была запрошена таблица,
    | по слагу (алиасу) или идентификатору
    |
    */

    public function getPage($page){
        /*$fileName = $name.'.php';

        if(file_exists($this->pageFile . $fileName))
            return $this->getContentPageFromFile($fileName);
        else
            return $this->getContentPageFromFile('404.php');*/
        if(is_numeric($page)) {
            $ret = $this
                ->Where('id='. $page)
                ->Get();

        }
        else{
            $ret = $this
                ->Where("slug='". $page."'")
                ->Get();
        }
        if($ret->num_rows == 0){
            $ret = $this
                ->Where("slug='404.html'")
                ->Get();
        }

        $data = $ret->fetch_assoc();

        return $data;
    }


    /*
    |--------------------------------------------------------------------------
    | Создание обьекта страницы и подготовка абсолютного маршрута
    |--------------------------------------------------------------------------
    | Сохраняет путь к страницам в переменную
    |
    |
    */



/*
|--------------------------------------------------------------------------
| Чтение подготовленной страницы 
|--------------------------------------------------------------------------
| Читает страницу и возвращает ее содержимое
| 
|
*/	
	/*function getContentPageFromFile ($fileName){
		// включаем буфер
		ob_start();
		include ($this->pageFile . $fileName); 

		// сохраняем всё что есть в буфере в переменную $content
		$content = ob_get_contents();
		
		// отключаем и очищаем буфер
		ob_end_clean();

		return $content;
	}*/




}