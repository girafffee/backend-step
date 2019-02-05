<?php

namespace App\Univer\Departments\Biochemistry;
use App\Univer\Calc;
use App\Univer\Departments\Departments;
/**
 * 
 */
class Leadership extends Departments
{
	
	function __construct()
	{
		parent::__construct();
	}
	
	public function GetData(){
		$ret = "/***Создалось руководство***/  || Счетчик: " .self::$count." <br/>";
		Calc::$i++;
		return $ret;
	}
}