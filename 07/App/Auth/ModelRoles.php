<?php
/**
 * Created by PhpStorm.
 * User: giafffee
 * Date: 20.06.2019
 * Time: 16:20
 */

namespace App\Auth;


use Kernel\Base\BaseModel;

class ModelRoles extends BaseModel
{
    public function __construct(){
        $this->table = "roles";
        $this->addFilds = ["name"];
    }
}