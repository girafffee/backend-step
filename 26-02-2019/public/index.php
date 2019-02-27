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


use Lavary\Menus\MenuBuilder;

$builder = new MenuBuilder();

$builder->make('MyNavBar', function($menu) {
  $menu->add('Home', $_SERVER['PHP_SELF'] .'?controller=contactform');
  $menu->add('About', $_SERVER['PHP_SELF'] .'#');
  $menu->add('services', $_SERVER['PHP_SELF'] .'#');
  $menu->add('Contact', $_SERVER['PHP_SELF'] .'#');

});





echo Responce::renderPage();

echo $builder->get('MyNavBar')->asUl();


