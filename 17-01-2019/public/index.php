<?php
$startFrameworkTime = "";
include ("../app/templates.lib.php");
include ("../app/vardump.lib.php");
include ("../app/files.lib.php");


$responce ['header']['sitename'] = "Hello World";
//$responce ['head']['title'] = "My First tpl";
$responce ['head']['css'] = "";
$responce ['footer']['copy'] = "&copy IT Step";
$responce ['content'] = '<h1 class="w-100"> Content </h1>';



//$responce['content'] = parserGuest();
$responce['content'] = parserPhoto();

//--------------------------------
buildPage($responce);


