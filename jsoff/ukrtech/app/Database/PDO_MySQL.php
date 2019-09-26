<?php


namespace App\Database;

use App\Config;

class PDO_MySQL extends DB_Driver
{
    public function __construct(){
        $this->db_host = Config::$db_host;
        $this->db_port = Config::$db_port;
        $this->db_name = Config::$db_name;
        $this->db_user = Config::$db_user;
        $this->db_pswd = Config::$db_pswd;
        $this->db_charset = Config::$db_charset;
        $dsn = "mysql:host=".$this->db_host.";port=".$this->db_port.";charset=".$this->db_charset.";dbname=".$this->db_name;
        $this->DB = new \PDO($dsn, $this->db_user, $this->db_pswd);
    }

    private static $instance;
    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}