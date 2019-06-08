<?php
namespace App\Page;
use App\Config;
use Kernel\Base\BaseModel;
use Kernel\Lib\DB_Driver;
use Kernel\Lib\MySQLi_DB;

/**
 * 
 */
class PageModel extends BaseModel
{

    public function __construct(){
        $this->table = "pages";
    }

    function getPageFile ($file){
				// включаем буфер
		ob_start();
		include (Config::$pathToStorage .'pages/'. $file); 

		// сохраняем всё что есть в буфере в переменную $content
		$content = ob_get_contents();
		
		// отключаем и очищаем буфер
		ob_end_clean();

		return $content;
	}


	function getPageByID ($id){

        $ret = $this->WhereAnd('id', '=', $id)
                ->Get();

        return $ret->fetch_assoc();
/*
		switch ($id) {
			case "1":
			return $this->getPageFile('about.php');
				break;

			case "2":
			return $this->getPageFile('blog.php');
				break;

			case '3':
			return $this->getPageFile('services.php');
				break;

			case '4':
			return $this->getPageFile('works.php');
				break;
			
			default:
			return " Нет данных "; // TODO Error 404 or HomePage
				break;
		}*/
	}


}