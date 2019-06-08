<?php
/**
 * Created by PhpStorm.
 * User: golol
 * Date: 26.04.2019
 * Time: 15:12
 */

namespace User;

use User\Config;


class MySQLi_DB extends DB_Driver
{

    private function __construct()
    {
        $this->dbhost = Config::$DBhost;
        $this->dbuser = Config::$DBuser;
        $this->dbpswd = Config::$DBpswd;
        $this->dbname = Config::$DBname;
        $this->DB = new \mysqli($this->dbhost, $this->dbuser, $this->dbpswd, $this->dbname);
        $this->DB->set_charset("UTF8");
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