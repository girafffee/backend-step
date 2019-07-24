<?php
/**
 * Created by PhpStorm.
 * User: giafffee
 * Date: 20.06.2019
 * Time: 16:20
 */

namespace App\Auth;


use Kernel\Base\BaseModel;

class ModelPermissions extends BaseModel
{
    public function __construct(){
        $this->table = "permissions";
        $this->addFilds = ["name"];
    }
}