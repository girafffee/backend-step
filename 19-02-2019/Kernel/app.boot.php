<?php
namespace Kernel;
use Kernel\Request;
use Kernel\Router;
/*
|--------------------------------------------------------------------------
| Создание базовых объектов
|--------------------------------------------------------------------------
|
| Создаем, Request, Responce загружаем Config
|
*/




/*
|--------------------------------------------------------------------------
| Router
|--------------------------------------------------------------------------
|
| Определение главного контроллера. Создание экземпляра контроллера
|
*/
$myRoute = new Router ();
$myController = $myRoute->getMainController ();

echo $myController->getContent();




