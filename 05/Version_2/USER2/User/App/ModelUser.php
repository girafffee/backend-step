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
    public function getSessionId($data){
        $addFildsFun['email'] = $this->getCellFunction($data['email'], 'email');
        $addFildsFun['pswd'] = $this->getCellFunction($data['pswd'], 'pswd');

        $sql = "SELECT * FROM `user` WHERE `email`=" .$addFildsFun['email']. " AND `pswd`=" .$addFildsFun['pswd']."; ";

        $session = MySQLi_DB::getInstance()->execute($sql);
        $user = $session->fetch_assoc();
        return $user['id'];
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

    public function checkIssetUser($data){
        $sql = "SELECT * FROM " . $this->table . " WHERE `email`='" .$data['email']."'; ";
        $checkdata['rows'] = MySQLi_DB::getInstance()->execute($sql);
        $checkdata['count'] = $checkdata['rows']->num_rows;
        return $checkdata;
    }

    public function setNewPswd($data){
        $data['pswd'] = $this->getCellFunction($data['pswd'], 'pswd');
        $data['email'] = $this->getCellFunction($data['email'], 'email');

        $sql = "UPDATE " . $this->table . " SET pswd=". $data['pswd'] ." WHERE email=".$data['email']."; ";
        print_r($sql);
        MySQLi_DB::getInstance()->execute($sql);

        if(MySQLi_DB::getInstance()->affected_rows() == 1) return true;
        else false;
    }

    public function loginIn($data)
    {
        $sql = "SELECT * FROM " . $this->table . " WHERE email='" . $data['email'] . "' AND ";
        $d['res'] = MySQLi_DB::getInstance()->execute($sql);
        $d['row'] = $d['res']->fetch_assoc();
        return $d;
    }
}