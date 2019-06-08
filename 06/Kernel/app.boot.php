<?php
namespace Kernel;
use Kernel\Request;
use App\Layout\Responce;
use Kernel\Router;
use App\Config;
/*
|--------------------------------------------------------------------------
| Создание базовых объектов
|--------------------------------------------------------------------------
|
| Создаем, Request, Responce загружаем Config
|
*/
$Config = Config::getInstance();
$Request = Request::getInstance();
$Responce = Responce::getInstance();
$Router = Router::getInstance();

$Responce::putPosition('content', $Router->getMainController()->getContent());
$Responce::buildPageData();


/*
|--------------------------------------------------------------------------
| Router
|--------------------------------------------------------------------------
|
| Определение главного контроллера. Создание экземпляра контроллера
|
*/

// $myController = $Router->getMainController();
// echo $myController->getContent();




