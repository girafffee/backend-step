<?php

function parserGuest(){
	$ret = "";
	$fileBase = "/17-01-19/storage/files"; //базовая папка
	$fileName = "guest.txt"; // имя файла
	$filePath =__DIR__."/..".$fileBase."/".$fileName;
	//$ret .= __FILE__;

	//$fromFile = file($filePath);
	//$ret.= PP($fromFile);

	$handle = @fopen($filePath, "r");
	if ($handle) {// Если файл открылся, то ..
    	while (($buffer = fgets($handle)) !== false) { //читаем по строкам
        $ret.= $buffer;
        //проверка на телефон или почту
        //smsGate || mailGate
    }
    if (!feof($handle)) {
        $ret .= "Ошибка: fgets() неожиданно потерпел неудачу\n";
    }
    fclose($handle);
}
	return $ret;
}

function parsePhoto(){
	$ret ="";
	$fileBase ="/17-01-19/storage/files"; // базовая папка
	$filePath= __DIR__ . "/.." . $fileBase . "/";

	$arr = scandir($filePath);
	$ret .= PP($arr);

	$ret .= '<ul>';

	for($i = 0; $i < sizeof($arr); $i++){
		if(exif_imagetype($filePath.$arr[$i])){ // проверяем является ли файл картинкой
		$ret .= '<li><img src="'.$filesBase.'/'.$arr[$i].'"width="50">'; // выводим картинку
		$ret .= date("F d Y H:i:s.", fileatime($filesPath. $arr[$i]));
		list($width, $height, $type, $attr) = getimagesize( $filename . $arr[$i]) 
            
      


		$ret .= '</li>'
		}
	}
	$ret .= '</ul>'
	return $ret;
}