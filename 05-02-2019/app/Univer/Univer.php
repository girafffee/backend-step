<?php

namespace App\Univer;
use App\Univer\Calc;

/**
 * 
 */

class Univer 
{
	static protected $count;
	function __construct()
	{
		self::$count++;
	}
	
	public function GetDataIn($name){
		$ret = "/***Создан университет***/ = " . $name . " || Счетчик: " .self::$count."<br/>";
		Calc::$i++;
		return $ret;
	}
}
