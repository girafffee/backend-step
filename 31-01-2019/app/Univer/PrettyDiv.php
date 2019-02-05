<?php

namespace App\Univer;

/**
 * 
 */
class PrettyDiv 
{
	
	function __construct()
	{
	
	}

	public function BuildDiv($data){
		$ret = 	"<div style='text-align: center;'>
				".$data."
				</div>";
		return $ret;
	}
}