<?php
namespace Kernel;
use Kernel\Request;
use Kernel\Responce;
use Kernel\Router;




/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. 
| Подключение Composer для работы со сторонними библиотеками
| Настройка автоподключения классов и прочих няжек
|
*/

$Request = Request::getInstance();
$Responce = Responce::getInstance();
$Router = Router::getInstance();



/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| Загрузка ядра системы. Создание необходимых классов
|
*/

$myController = $Router->getMainController();

echo $myController->getContent;
