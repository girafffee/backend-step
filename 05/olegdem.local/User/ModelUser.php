<?php

namespace User;

class ModelUser extends ModelBase
{

    public function __construct()
    {
        $this->table = "user";
        $this->addFilds = array("email", "pswd", "token");

        $this->funFildsCreate['pswd']['start'] = " MD5(";
        $this->funFildsCreate['pswd']['end'] = ") ";
    }


    public function token($data)
    {
        $sql = "SELECT token, activemail FROM " . $this->table . " WHERE token='" . $data['token'] . "'";
        $res = MySQLi_DB::getInstance()->execute($sql);
        $row = $res->fetch_assoc();
        return $row;
    }

    public function activEmail($data)
    {
        $sql = "UPDATE " . $this->table . " SET activemail='yes' WHERE token='" . $data['token'] . "'";
        $res = MySQLi_DB::getInstance()->execute($sql);
        return $res;
    }

    public function loginIn($data)
    {
        $sql = "SELECT * FROM " . $this->table . " WHERE email='" .
            $data['email'] . "' AND pswd=MD5('" . $data['pswd'] . "')";
        $res = MySQLi_DB::getInstance()->execute($sql);
        $row = $res->fetch_assoc();
        return $row;
    }

    public function restoreEmail($data)
    {
        $sql = "UPDATE " . $this->table . " SET pswd = MD5('" . $data['pswd'] . "') WHERE email = '" . $data['email'] . "'";
        $res = MySQLi_DB::getInstance()->execute($sql);

        return $res;
    }
}