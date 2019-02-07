<?php

namespace App\Univer\Departments\Biochemistry\Students;
use App\Univer\Departments\Biochemistry\Students;
/**
 * 
 */
class Student extends Students
{
	
	private $studName;
	private $studAge;
	private $studVes;
	private $studStip;
	function __construct()
	{
		parent::__construct();
		$this->studAge = rand(17,50);
		$this->studVes = rand(60, 120);
		$this->studStip = rand(1300, 2400);
	}
	
	public function GetDataIn($what, $name){
		$this->studName = $name;
		$ret = "/***Created ".$what."***/ = " . $this->studName ." || Счетчик: " .$this->safeCount." <br/>";
		return $ret;
	}

	private function StudInfo()
	{		
		$ret = "Ваше имя: " .$this->studName ."<br/>";
		$ret .= "Ваш возраст: " .$this->studAge." лет <br/>";
		$ret .= "Ваш вес: " .$this->studVes." кг. <br/>";

		$ret .= "Размер стипендии: " .$this->studStip. " грн. <br/>";	
		return $ret;
	}
	
	public function callStudInfo()
	{
		$ret = $this->StudInfo();
		return $ret;
	}
}