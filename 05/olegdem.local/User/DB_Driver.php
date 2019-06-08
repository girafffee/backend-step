<?php
/**
 * Created by PhpStorm.
 * User: golol
 * Date: 26.04.2019
 * Time: 14:56
 */

namespace User;


class DB_Driver
{
    public $dbhost, $dbport, $dbuser, $dbpswd, $dbname; // Данные по подключению к базе
    public $table; // Имя рабочей таблицы
    public $DB; // Указатель на базу данных
    private $responce;

    public function execute($sqlStr)
    {
        $this->responce = $this->DB->query($sqlStr);
        return $this->responce;
    }

    public function getCount($table)
    {
        $sql = "SELECT COUNT(id) AS c FROM " . $table;
        //echo $sql;
        $res = $this->DB->query($sql);
        $tmp = $res->fetch_assoc();
        // var_dump($tmp['c']);
        return $tmp['c'];
    }

    public function getResponce()
    {
        return $this->responce;
    }

    public function getError()
    {
        return $this->DB->error;
    }

    public function getErrno()
    {
        return $this->DB->errno;
    }
}