<?php

namespace App\Univer\Departments;
use App\Univer\Calc;
use App\Univer\Univer;

/**
 * 
 */
class Departments extends Univer 
{	
	
	function __construct()
	{
	
	}
	
	public function GetDataIn($col){
		$ret = "/***Созданы факультеты***/ = " . $col ."<br/>";
		Calc::$i++;
		return $ret;
	}
}
