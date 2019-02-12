<?php

namespace App\Cars;
use App\Cars\PCar;

use App\Cars\Transmission;
use App\Cars\Engine;



/**
 * 
 */
class Cabriolet extends PCar {

	    use Transmission, Engine {
	    Engine::getOil insteadof Transmission;	    
        Transmission::getOil as getTransmissionOil;
        //Engine::getOil as EngineOil;
    }

    function __construct(){
    	parent::__construct();
    }


}