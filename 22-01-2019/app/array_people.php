<?php


$eye[1] = "blue";
$eye[2] = "green";
$eye[3] = "gray";

$head[1] = "white";
$head[2] = "black";
$head[3] = "red";



function createUnivercity($peopleCount = 10){
	GLOBAL $eye, $head;
	for ($i=1; $i <= $peopleCount ; $i++) { 
		$oneHuman ['eye'] = $eye[random_int(1, count($eye) )];
		$oneHuman ['head'] = $head[random_int(1, count($head) )];
		// $oneHuman ['rise'] = random_int(100, 200);
		$ret[$i] = $oneHuman;
	}
	return $ret;
}



function addRise ($peoples, $min = 100, $max = 200){
  for ($i = 1; $i <= count($peoples); $i++){
  	$peoples[$i]['rise'] = random_int($min, $max);
  }
  return $peoples;
}


function sortByRise ($peoples, $dir = 'DESC'){
	GLOBAL $responce;
	$flag = true;
	while ($flag) {
		$flag = false;
		for ($i = 2; $i <= count($peoples); $i++) { 
			if ($dir == 'DESC'){
				if ($peoples[$i]['rise'] > $peoples[$i-1]['rise']) {
					$tmp = $peoples[$i];
					$peoples[$i] = $peoples[$i-1];
					$peoples[$i-1] = $tmp;
					$flag = true;
				}
			} else {
				if ($peoples[$i]['rise'] < $peoples[$i-1]['rise']) {
					$tmp = $peoples[$i];
					$peoples[$i] = $peoples[$i-1];
					$peoples[$i-1] = $tmp;
					$flag = true;
				}

			}
		}
	}
	$responce ['footer']['error'] = "test";

	return $peoples;
}



function calkGreen ($peoples){
	$c = 0;
	for ($i = 1; $i <= count($peoples); $i++) { 
		if ( $peoples[$i]['eye'] == "green" ) {
			$c++;
		}
	}
	return $c;
}


function countOf ($peoples, $key, $val){

	$c = 0;
	for ($i = 1; $i <= count($peoples); $i++) { 
		if ( $peoples[$i][$key] == $val ) {
			$c++;
		}
	}
	return $c;
}


function echoPeopleAll($peoples){
	$ret = '<table class="table  table-hover">';

	$keys = array_keys ($peoples[1]);

	$lang ['eye'] = " Цвет глаз ";
	$lang ['head'] = " Цвет волос ";
	$lang ['rise'] = " Рост ";

	$ret.= "<caption>Список пользователей</caption>";
	$ret.= "<thead><tr>";

	foreach ($keys as $key => $value) {
		$ret.= "<th>" . $lang [$value] . "</th>";
	}

	$ret.="</tr></thead><tbody>";

//	$ret.= PP ($keys);

	for ($i = 1; $i <= count($peoples); $i++){
  		$ret.=  echoPeople ($peoples[$i]);
  	}
  	$ret.= "</tbody></table>";
  return $ret;
}



function echoPeople($people){
	$lang ['eye'] = " Цвет глаз ";
	$lang ['head'] = " Цвет волос ";
	$lang ['rise'] = " Рост ";

	$ret = "<tr>";

	foreach ($people as $key => $value) {
		$ret.="<td>" . $value . "</td>";
	}

	$ret.= "</tr>";	
	return $ret;

}


/*
https://ru.wikipedia.org/wiki/CSV
http://php.net/manual/ru/function.explode.php
http://php.net/manual/ru/function.implode.php
*/
function testExplodeImplode ($peoples){
	$ret = "";

	for ($i = 1; $i <= count($peoples); $i++){
  		$tmpStr[$i]= implode (',', $peoples[$i]);
  	}
  	$ret.= "<hr><p> implode - результат работы разбиения на </p>";
  	$ret.= PP($tmpStr);

  	// $tmpArr = explode (',', $tmpStr);

	for ($i = 1; $i <= count($tmpStr); $i++){
  		$tmpArr[$i]= explode (',', $tmpStr[$i]);
  	}
  	
  	$ret.= "<p> explode - результат работы разбиения на </p>";
  	$ret.= PP($tmpArr);

  	return $ret;
}



function testJSON($peoples)
{
	$ret = "";
	$tmpStr = json_encode ($peoples);

	$ret.= "<hr><p> JSON - закодированная информация </p>";
	$ret.= $tmpStr;

	$obj = json_decode  ($tmpStr, true);
	$ret.= "<hr><p> JSON - закодированная информация </p>";
	$ret.= PP ($obj);

	return $ret;
}

/*
http://php.net/manual/ru/ref.filesystem.php
*/

 function saveToFile($peoples)
{
	$ptrFile = fopen("peoples.json", 'w');
	if (!$ptrFile) {
		die ("File Error");
	}
	fwrite ($ptrFile, json_encode ($peoples));
	fclose($ptrFile);
}

function loadFromFile (){
	$fromFile = file ("peoples.json");
	return PP (json_decode($fromFile[0], true));
}

