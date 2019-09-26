<?php


namespace App\Database;


class DB_Driver
{
    protected $db_host, $db_port, $db_user, $db_pswd, $db_name, $db_charset; // Данные по подключению к базе
    protected $DB; // Указатель на базу данных

    public function query($sql){
        return $this->DB->query($sql);
    }
}