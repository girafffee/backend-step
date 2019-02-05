<?php

namespace App\Univer\Departments\Biochemistry\Leadership;
use App\Univer\Calc;
use App\Univer\Departments\Biochemistry\Leadership;
/**
 * 
 */
class Decan extends Leadership
{
	
	
	function __construct()
	{
	
	}
	
	final public function GetDataIn($name){
		$ret = "/***Создан декан***/ = ".$name."<br/>";
		Calc::$i++;
		return $ret;
	}
}