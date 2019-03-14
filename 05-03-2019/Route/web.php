<?php
use \Kernel\Router;
/*
|--------------------------------------------------------------------------
| Создание роутов
|--------------------------------------------------------------------------
|
| http://laravel.su/docs/5.2/routing
|
*/


Router::add("/", "\App\Homepage\HomepageController")
			->setName('Home');

Router::add("/about.html", "\App\Page\PageController" , "index")
			->addArg("page_id", 1)
			->setName('About');

Router::add("/contact.html", "\App\Contactform\CFController")
			->setName('Contact')
			->middleware("Stop");




 