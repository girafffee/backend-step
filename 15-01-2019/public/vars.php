<?php

$_SESSION["someVar"] = "GoGO12";


$a = "A live";
echo "<br>" . __FILE__ . " " . __LINE__ . " a = " . $a ."<br>";

/*
echo $b;
$b = "B live to";

if (isset($v)) {
	echo " V life";
} else {
	echo " V die";
}



myFun1 ("I send a to myFun1");
*/

function myFun1 ($b){
	GLOBAL $a;
	//echo $GLOBALS ['a'];
	echo "<br > In Function myFun1 a=" . $a;
	$a = " Some change in Fun1";
	echo "<br> Global: <pre> ";
	var_dump($GLOBALS);
	echo "</pre>";
}

echo "a after fun: " . $a;