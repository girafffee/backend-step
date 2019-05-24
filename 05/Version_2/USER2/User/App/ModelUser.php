<?php

namespace App;

class ModelUser extends ModelBase
{

    public function __construct()
    {
        $this->table = "user";
        $this->addFilds = array("email", "pswd", "token");
        $this->funFildsCreate['pswd'] = array(
            "start" => " MD5(",
            "end" => ") "
        );


       /* $this->funFildsCreate['email']['start'] = " MD5(";
        $this->funFildsCreate['email']['end'] = ") ";*/

    }




    public function getToken($data)
    {
        $sql = "SELECT token FROM " . $this->table . " WHERE token='" . $data['token'] . "'";
        $res = MySQLi_DB::getInstance()->execute($sql);
        $row = $res->fetch_assoc();
        return $row;
    }

    public function activEmail($data)
    {
        $sql = "UPDATE " . $this->table . " SET verificate_at=(CURRENT_TIMESTAMP), token='' WHERE token='" . $data['token'] . "';";
        MySQLi_DB::getInstance()->execute($sql);
        $row = MySQLi_DB::getInstance()->affected_rows();
        return $row;
    }


    public function checkIssetUserEmail($data){
        $sql = "SELECT * FROM " . $this->table . " WHERE `email`='" .$data['email']."'; ";
        $rows = MySQLi_DB::getInstance()->execute($sql);
        $count = $rows->num_rows;
        return $count;
    }
    public function checkIsset($data){
        $data['pswd'] = $this->getCellFunction($data['pswd'], 'pswd');
        $data['email'] = $this->getCellFunction($data['email'], 'email');

        $sql = "SELECT * FROM `user` WHERE `email`=" .$data['email']. " AND `pswd`=" .$data['pswd']."; ";
        $session = MySQLi_DB::getInstance()->execute($sql);
        return $session;
    }

    public function getSessionId($data){
        $session = $this->checkIsset($data);
        return $session->fetch_assoc();
    }
    public function checkIssetUser($data){
        $rows = $this->checkIsset($data);
        return $rows->num_rows;
    }

    public function setNewPswd($data){
        $data['pswd'] = $this->getCellFunction($data['pswd'], 'pswd');
        $data['email'] = $this->getCellFunction($data['email'], 'email');

        $sql = "UPDATE " . $this->table . " SET pswd=". $data['pswd'] ." WHERE email=".$data['email']."; ";

        MySQLi_DB::getInstance()->execute($sql);
        if(MySQLi_DB::getInstance()->affected_rows() == 1) return true;
        else false;
    }

}