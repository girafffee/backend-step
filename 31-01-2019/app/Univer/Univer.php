<?php

namespace App\Univer;
use App\Univer\Calc;

/**
 * 
 */
class Univer 
{
	
	function __construct()
	{
	
	}
	
	public function GetDataIn($name){
		$ret = "/***Создан университет***/ = " . $name ."<br/>";
		Calc::$i++;
		return $ret;
	}
}
