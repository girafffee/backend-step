<?php
use \Kernel\Router;
/*
|--------------------------------------------------------------------------
| Создание роутов
|--------------------------------------------------------------------------
|
| http://laravel.su/docs/5.2/routing
| https://symfony.com/doc/current/components/routing.html
| 
*/

Router::addGroup("/PAGE/{action}/{page_id}/{page_autor}", "\App\Page\PageController");

Router::add("/", "\App\Homepage\HomepageController")
            ->routeName('Home')
			->showInMap();

Router::add("/home", "\App\Homepage\HomepageController")
            ->addArg("page_id", "home")
            ->routeName('Home')
            ->showInMap();

Router::add("/about", "\App\Page\PageController")
            ->addArg("page_id", "about")
            ->name("shop");

Router::add("/service", "\App\Page\PageController")
			->addArg("page_id", "service")
			->routeName('Service')
            //->middleware('Stop')
			->showInMap();

Router::add("/shop", "\App\Page\PageController")
			->addArg("page_id", "shop")
			->routeName('Shop')
			->showInMap();

Router::add("/catalog", "\App\Page\PageController")
			->addArg("page_id", "catalog")
			->routeName('Catalog');

Router::add("/login", "\App\Page\PageController")
            ->addArg("page_id", "login")
            ->routeName('Login');

Router::add("/register", "\App\Page\PageController")
            ->addArg("page_id", "register")
            ->routeName('Register');


//Router::resource('/shop.html', "\App\Page\PageController", "index");




			








 