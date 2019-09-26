<?php


namespace App\Database;


class Query
{
    protected $table, $qr;

    public function query($sql){
        return PDO_MySQL::getInstance()->query($sql);
    }

    public static function query_($sql){
        return PDO_MySQL::getInstance()->query($sql);
    }
    public static function updateAutoIncrement($tbl, $id){
        return PDO_MySQL::getInstance()->query("ALTER TABLE $tbl AUTO_INCREMENT=$id");
    }

    public function all(){
        return PDO_MySQL::getInstance()->query("SELECT * FROM ". $this->table);
    }
}