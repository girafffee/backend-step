<?php

namespace App\Cars;

/**
 * 
 */
class Basecar {
	protected static $count = 1;
	function __construct(){
		echo static::$count++;

	}	
	public static function createNewCarByType($carType='')
	{
		return new Cabriolet();
	}
}