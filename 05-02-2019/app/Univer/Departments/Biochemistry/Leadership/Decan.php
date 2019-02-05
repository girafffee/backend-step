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
		parent::__construct();
	}
	
	final public function GetDataIn($name){
		$ret = "/***Создан декан***/ = ".$name." || Счетчик: " .self::$count." <br/>";
		Calc::$i++;
		return $ret;
	}
}