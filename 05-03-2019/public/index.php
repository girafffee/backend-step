<?php
use App\Layout\Responce;
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
include_once ("../vendor/autoload.php");


/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| Загрузка ядра системы. Создание необходимых классов
|
*/
include_once ("../Kernel/app.boot.php");

echo Responce::renderPage();
