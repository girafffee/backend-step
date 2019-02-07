<?php

namespace App\Univer\Departments\Biochemistry;
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
	
	public function GetData($what){
		$ret = "/***Created ".$what."***/  || Счетчик: " .$this->safeCount." <br/>";
		return $ret;
	}
}