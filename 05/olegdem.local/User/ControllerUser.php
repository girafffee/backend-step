<?php

namespace User;

use User\ModelUser;

class ControllerUser extends BaseController
{

    private $content;
    private $error;

    public function isUserLogin()
    {
        return false;
    }

    public function doStartUserSession()
    {
    }

    public function doEndUserSession()
    {
    }

    public function getWiget()
    {
        if ($this->isUserLogin()) {
            return $this->render("wiget-login.tpl.php");
        } else {
            return $this->render("widget-guest.tpl.php");
        }
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getError()
    {
        return $this->error;
    }

    public function index()
    {

    }

    public function register()
    {
        $this->content = $this->render("register-form.tpl.php");
    }

    public function login()
    {
        $this->content = $this->render("login-form.tpl.php");
    }

    public function restore()
    {
        $this->content = $this->render('restore-email.tpl.php');
    }

    public function restoreEmail()
    {
        $data1 = $_POST;
        $pswd = $this->genPasswordOne();
        $data1['pswd'] = $pswd;
        $data = $this->Model->restoreEmail($data1);
        var_export($data);
        $mail['email'] = $data1['email'];
        $mail['body'] = "Ваш новый пароль: $pswd";
        $mail['send'] = 'Новый пароль отправлен вам на email';
        $mail['subject'] = 'Восстановление пароля';
        $this->SendEmail($mail);

    }

    function genPasswordOne($length = 8)
    {
        $password = "";
        for ($i = 0; $i < $length; $i++)
            $password .= chr(mt_rand(97, 122)); // 97 - это a, а 122 - это z
        return $password;
    }

    public function loginIn()
    {
        $data1 = $_POST;
        $data = $this->Model->loginIn($data1);
        //     var_export($data);
        if ($data) {
            if ($data['activemail']) {
                $this->content = $this->render('wiget-login.tpl.php');
            } else {
                echo 'Подтвердите ваш email!';
            }
        } else {
            echo "НЕправильный логин или пароль!";
        }
    }

    public function token()
    {
        $data1 = $_GET;
        $data = $this->Model->token($data1);
        if (!$data['activemail']) {
            $act = $this->Model->activEmail($data);
            echo 'Спасибо за подтверждения Email-а';
        } else {
            echo 'Вы уже подтвердили Email. Спасибо!';
        }
    }

    public function create()
    {
        // Логика

        $data1 = $_POST;


        if ($data1['pswd'] == $data1['pswd1']) {
            $data1['token'] = md5(uniqid($data1['email'], true));
            $data = $this->Model->Create($data1);
            $this->error = $data['errNum'] . $data['errText'];
            $mail['body'] = '<b>Ваш email: </b>' . $data1['email'] . '<br> <b>Ваш пароль: </b>' . $data1['pswd'] . '<br>'
                . 'Для подтверждения регистрации перейдите по ссылке: 
                <a href="http://' . $_SERVER['SERVER_NAME'] . ':81' . $_SERVER['PHP_SELF'] . '?token=' . $data1['token'] . '"><b>Подтверждение</b></a>';
            $mail['email'] = $data1['email'];
            $mail['send'] = 'Письмо с подтверждением регистрации отправлено';
            $mail['subject'] = 'Подтверждение регистрации';
            $this->SendEmail($mail);
        } else {
            $this->content = $this->render("register-form.tpl.php");
            echo "Пароли не совпадают!";
        }

    }


    private $Model;

    /*
     *  Одиночка
     */
    private function __construct()
    {
        $this->Model = new ModelUser();
    }

    private static $instance;

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}