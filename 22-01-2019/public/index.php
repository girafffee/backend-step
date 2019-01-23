<?php
$startFrameworkTime = microtime(true);
include ("../app/templates.lib.php");
include ("../app/vardump.lib.php");
include ("../app/menuClass.lib.php");

$mainMenu = new Menu();

$mainMenu->addEl('/','Главная');
$mainMenu->addEl('/about.html','О нас');
$tmp  = $mainMenu->addEl('/gallery.html','Галлерея');
	$mainMenu->addEl('/gallery.html','Наши фото',$tmp);
	$mainMenu->addEl('/gallery.html','Ваши фото',$tmp);
	$mainMenu->addEl('/gallery.html','Их фото',$tmp);



$responce ['header']['sitename'] = "Hello World";
//$responce ['head']['title'] = "My First tpl";
$responce ['head']['css'] = "";
$responce ['footer']['copy'] = "&copy IT Step";
$responce ['content'] = '<h1 class="w-100"> Content </h1>';



//$responce['content'] = parserGuest();

//--------------------------------
buildPage($responce);


