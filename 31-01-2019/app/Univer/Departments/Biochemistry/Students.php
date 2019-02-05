<?php

namespace App\Univer\Departments\Biochemistry;
use App\Univer\Calc;
use App\Univer\Departments\Departments;
/**
 * 
 */
class Students extends Departments
{
	
	function __construct()
	{
	
	}
	
	public function GetData(){
		$ret = "/***Создалось студентство***/ <br/>";
		Calc::$i++;
		return $ret;
	}
}