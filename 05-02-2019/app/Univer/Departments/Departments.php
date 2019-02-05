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
		parent::__construct();
	}
	
	
	public function GetDataIn($col){
		$ret = "/***Созданы факультеты***/ = " . $col ." || Счетчик: " .parent::$count." <br/>";
		Calc::$i++;
		return $ret;
	}
}
