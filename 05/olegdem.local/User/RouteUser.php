<?php

namespace User;

class RouteUser
{

    private $url;
    public $action;

    public function getRegisterLink()
    {
        return $this->url . "?doUserAction=register";
    }

    public function getLoginLink()
    {
        return $this->url . "?doUserAction=login";
    }

    public function getRestoreLink()
    {
        return $this->url . "?doUserAction=restore";
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
            if ($_POST["doUserAction"] == "loginIn") {
                $this->action = "loginIn";
            }
            if ($_POST['doUserAction'] == 'restoreEmail') {
                $this->action = 'restoreEmail';
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

