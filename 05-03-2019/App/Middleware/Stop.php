<?php

namespace App\Middleware;
use Kernel\Lib\PP;
use Kernel\Router;

/**
 * 
 */
class Stop{
	

	public function __construct(){
		die('Stop router');
	}
}