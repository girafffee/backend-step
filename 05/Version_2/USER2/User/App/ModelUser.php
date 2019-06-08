<?php

namespace App;

class ModelUser extends ModelBase
{
    public $role;

    public function __construct()
    {
        $this->table = "users";
        $this->addFilds = array("email", "pswd", "token");
        $this->funFildsCreate['pswd'] = array(
            "start" => " MD5(",
            "end"   => ") "
        );
        $this->role = "SELECT users.email, 
            GROUP_CONCAT(DISTINCT roles.name, ',') AS roles,
            GROUP_CONCAT(DISTINCT permissions.name, ',') AS permissions 
        FROM users
        JOIN user_roles ON users.id=user_roles.user_id
        JOIN roles ON user_roles.role_id=roles.id
        JOIN role_permissions ON roles.id=role_permissions.role_id
        JOIN permissions ON role_permissions.permissions_id=permissions.id ";
    }


    public function userRole(){
        $sql = $this->role . " WHERE email='" . $_SESSION['email'] . "' GROUP BY `users`.`email`; ";
        $res = MySQLi_DB::getInstance()->execute($sql);
        $row = $res->fetch_assoc();

        if(!empty($row['roles']) AND !empty($row['permissions'])) {
            $roles = explode(",", $row['roles']);
            $permissions = explode(",", $row['permissions']);
            foreach ($roles as $role) {
                if (strlen($role) > 0)
                    $data['roles'] = $role;
            }
            foreach ($permissions as $perm) {
                if (strlen($perm) > 0)
                    $data['permissions'][] = $perm;
            }
        }else{
            $data['roles'] = "user";
            $data['permissions'] = "";
        }

        return $data;
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

        $sql = "SELECT * FROM " . $this->table . " WHERE `email`=" .$data['email']. " AND `pswd`=" .$data['pswd']."; ";
        $session = MySQLi_DB::getInstance()->execute($sql);
        return $session;
    }

    public function getSessionId($data){
        $session = $this->checkIsset($data);
        return $session->fetch_assoc()['id'];
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