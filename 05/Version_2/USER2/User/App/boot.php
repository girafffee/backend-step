<?php

$User = App\ControllerUser::getInstance();
$Route = App\RouteUser::getInstance();

$str = $Route->action;

$User->$str();
