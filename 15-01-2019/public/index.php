<?php

include ("../app/templates.lib.php");
include ("../app/vardump.lib.php");
include ("../app/array_people.php");


$responce ['header']['sitename'] = "Hello World";
//$responce ['head']['title'] = "My First tpl";
$responce ['head']['css'] = "";
$responce ['footer']['copy'] = "&copy IT Step";
$responce ['content'] = '<h1 class="w-100"> Content </h1>';



$peoples = createUnivercity ();
$responce ['content'].= ' <div class="row"> ';
//$responce ['content'].= PP ($peoples);
$responce ['content'].= "</div>";

$responce ['content'].= ' <div class="row"> ';
$responce ['content'].= ' <h3 class="w-100"> Статистика </h3> ';
$responce ['content'].= '<p> красноглазых : ' . countOf($peoples, 'eye', 'red') . '</p>';
$responce ['content'].= '</div>';


$peoples = addRise ($peoples);
//$responce ['content'].= PP ($peoples);
$peoples = sortByRise ($peoples);
//$responce ['content'].= PP ($peoples);
$peoples = sortByRise ($peoples, 'ASC');
$responce ['content'].= PP ($peoples);
//$responce ['content'].= echoPeopleAll ($peoples);

//$responce ['content'].= testExplodeImplode ($peoples);
// $responce ['content'].= testJSON ($peoples);


saveToFile($peoples);
$responce ['content'].=loadFromFile ();




buildPage($responce);


