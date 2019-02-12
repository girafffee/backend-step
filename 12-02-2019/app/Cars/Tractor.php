<?php

namespace App\Cars;
use App\Cars\Truck;
use App\Cars\Turnbuckle;

/**
 * 
 */
class Tractor extends Truck implements Turnbuckle, Computer {

	public function makeConnector (){
		echo "<p> Я обязательно описываю - каким методом я подключаю прицеп</p>";
	}
}