<?php

 $menu = {}; 
$count = 0;


function addEl($url, $text, $parent){
	GLOBAL $menu;
	$menu [$count].['url'] = $url;
	$menu [$count].['text'] = $text;
	$menu [$count].['parent'] = $parent;
	$menu [$count].['children'] = false;

	if($parent != 0){
		$menu [$parent].['children'] = true;
	}

	$count++;

return $count-1;
}

function echoMenu($parent = 0){
	GLOBAL $menu;
	$ret = '<ul>';
	for($i = 1; $i < $count; $i++){
		$ret .= '<li><a href="'.$menu[$i]['url'].'">'.$menu[$i]['text'].'</a></li>';
	}
	$ret .= '</ul>';
}

$filePathJson = "../database/data/menu.json";

function saveMenuJson(){
	GLOBAL $menu, $filePathJson;
	$handle = @fopen($filePathJson, "w");
	fputs($handle, json_encode($menu));
	fclose($handle);
}

function loadMenuJson(){
	GLOBAL $menu, $filePathJson;
	$str = file($filePathJson);
	$menu = json_decode($str[0], true);
}

$filePathHTML = "../public/cache/menu.html";
function saveMenuHTML(){
	GLOBAL $filePathHTML;
	$handle = fopen($filePathHTML, "w");
	fwrite($handle, $html);
	fclose($handle);
}

function getMenuHTML(){
	
}