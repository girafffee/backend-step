<?php

namespace App;

class RouteUser
{

    private $url;
    public $action;

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
        return $this->url . "?doUserAction=newpswd";
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
            if ($_POST["doUserAction"] == "registerCreate") {
                $this->action = "create";
            }

            if ($_POST["doUserAction"] == "loginInto") {
                $this->action = "loginInto";
            }
            if ($_POST['doUserAction'] == "checkEmail"){
                $this->action = "checkEmail";
            }
        }
        if (isset($_GET['token'])) {
            $this->action = 'token';
        }
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

