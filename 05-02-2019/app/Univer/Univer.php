<?php

namespace App\Univer;

/**
 * 
 */

class Univer 
{
	static protected $count;
	protected $safeCount;
	function __construct()
	{
		$this->safeCount = self::$count++ + 1;
	}
	
	public function GetDataIn($what, $name){
		$ret = "/***Created ".$what."***/ = " . $name . " || Счетчик: " .$this->safeCount."<br/>";
		return $ret;
	}
	
	public function GetData($what){
		$ret = "/***Created ".$what."***/  || Счетчик: " .$this->safeCount." <br/>";
		return $ret;
	}
}
