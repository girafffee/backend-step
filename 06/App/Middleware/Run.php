<?php

namespace App\Middleware;


/**
 *
 */
class Stop{


    public function __construct(){
        die('Run router');
    }
}