<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<?php

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
include_once("vendor/autoload.php");

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| Загрузка ядра системы. Создание необходимых классов
|
*/
include_once("User/boot.php");

echo $User->getWiget();
echo "<hr>";
echo $User->getError();
echo "<hr>";
echo $User->getContent();

