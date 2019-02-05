<?php

namespace App\Univer\Departments\Biochemistry\Students;
use App\Univer\Calc;
use App\Univer\Departments\Biochemistry\Students;
/**
 * 
 */
class Student extends Students
{
	
	
	function __construct()
	{
	
	}
	public function GetDataIn($name){
		$ret = "/***Создан студент***/ = " . $name ."<br/>";
		Calc::$i++;
		return $ret;
	}
}