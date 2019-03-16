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
			->routeName('Home');

Router::add("/about.html", "\App\Page\PageController")
			->addArg("page", 1)
			->routeName('About');

Router::add("/service.html", "\App\Page\PageController")
			->addArg("page", 2)
			->routeName('Service');

Router::add("/shop.html", "\App\Page\PageController")
			->addArg("page", 3)
			->routeName('Shop');

Router::add("/catalog.html", "\App\Page\PageController")
			->routeName('Catalog')
			->addArg("page", "catalog");

Router::add("/contact.html", "\App\Contactform\CFController")
			->routeName('Contact');







 