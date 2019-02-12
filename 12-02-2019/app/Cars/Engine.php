<?php

namespace App\Cars;

/**
 * 
 */
trait Engine {
	public function getOil(){
		echo "<p> Масло для движка</p>";
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