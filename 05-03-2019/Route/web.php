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

Router::addGroup("/PAGE/{ACTION:index}/{page_id}/{page_autor}", "\App\Page\PageController");

Router::add("/", "\App\Homepage\HomepageController")
			->routeName('Home')
			->showInMap();

Router::add("/about.html", "\App\Page\PageController")
			->addArg("page", 1)
			->routeName('About')
            //->middleware('Stop')
            //->middleware('Run')
            //->middleware('Delete')
            ->showInMap();

Router::add("/service.html", "\App\Page\PageController")
			->addArg("page", 2)
			->routeName('Service')
            //->middleware('Stop')
			->showInMap();

Router::add("/shop.html", "\App\Page\PageController")
			->addArg("page", 3)
			->routeName('Shop')
            ->middleware('Stop')
			->showInMap();

Router::add("/catalog.html", "\App\Page\PageController")
			->addArg("page", "catalog")
			->routeName('Catalog');

    Router::addForm("/contact.html", "\App\Contactform\CFController")
                ->routeName('Contact')
                ->middleware('Stop');

Router::resource('/shop.html', "\App\Page\PageController", "index");



Router::add("/sitemap.html", "\App\SiteMap\SiteMapController")
			->routeName('Map');
			








 