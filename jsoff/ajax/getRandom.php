<?php
//var_dump($_GET);
$min = intval($_GET['min']);
$max = intval($_GET['max']);

if(!isset($min) || ($min == 0)){
    echo "-1";
    exit;
}

echo rand($min,$max);