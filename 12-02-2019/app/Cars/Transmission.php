<?php

namespace App\Cars;

/**
 * 
 */
trait Transmission {
	public function getTransmissionType (){
		echo "<p> Есть коробка передач </p>";
	}

	public function getOil(){
		echo "<p> Масло для коробки</p>";
	}
	
}


/*
trait SayWorld {
    public function sayHello() {
        parent::sayHello();
        echo 'World!';
    }
}
*/