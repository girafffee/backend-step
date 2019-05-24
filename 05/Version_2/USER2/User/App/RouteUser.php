<?php

namespace App;

class RouteUser
{

    private $url;
    public $action;
    public $param; // что передать

    public function getRegisterLink(){
        return $this->url . "?doUserAction=register";
    }

    public function getLoginLink(){
        return $this->url . "?doUserAction=login";
    }

    public function getLogOutLink(){
        return $this->url . "?doUserAction=logout";
    }
    public function getNewPassLink(){
        return $this->url . "?doUserAction=newpswd";
    }
    public function getCheckEmailLink(){
        $this->param = '$data';
        return $this->url . "?doUserAction=resetpswd";
    }


    private function __construct()
    {
        $url = explode("?", $_SERVER['REQUEST_URI']);
        $this->url = $url[0];
        if (isset($_GET["doUserAction"])) {
            $this->action = $_GET["doUserAction"];
        } else {
            $this->action = "index";
        }
        if (isset($_POST["doUserAction"])) {
            switch ($_POST["doUserAction"]){
                case "registerCreate":
                    $this->action = "create";
                    break;
                case "loginInto":
                    $this->action = "loginInto";
                    break;
                case "checkEmail":
                    $this->action = "checkEmail";
                    break;
                case "updatePassword":
                    $this->action = "updatePassword";
                    break;
                default:
                    $this->action = "loginInto";
                    break;
            }

        }
        if (isset($_GET['token']))
            $this->action = 'token';

        if(isset($_GET['tokenpass']))
            $this->action = 'tokenpass';

    }

    private static $instance;

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}

