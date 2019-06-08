<?php

$User = \User\ControllerUser::getInstance();
$Route = \User\RouteUser::getInstance();

$str = $Route->action;

$User->$str();
