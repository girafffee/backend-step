<?php
session_start();

echo "<br>" . __FILE__ . " " . __LINE__ . " a = " . $a ."<br>";



/*

echo "<hr>";
$s = "2" . "2";
$i = 2 + 2;
echo $s . " " . gettype ($s);
echo $i . " " . gettype ($i);
echo "<hr>";

*/

include "vars.php"; 
include_once "fun.php";


echo "" . __FILE__ . " (" . __LINE__ . ") a = " . $a ."<br>";
include_once "fun.php";



myFun1 ("ss");
myFun2 ("");
