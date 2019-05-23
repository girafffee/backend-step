<?php

namespace App;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ControllerUser extends BaseController
{

    private $content;
    private $error;

    public function isUserLogin()
    {
        // $_SESSION['user_id'] = 11;
        if (session_status() == PHP_SESSION_ACTIVE and isset ($_SESSION['user_id']) and $_SESSION['user_id'] != -1) {
            return true;
        }
        else {
            return false;
        }
    }

    public function doStartUserSession($data)
    {
        $_SESSION['user_id'] = $this->Model->getSessionId($data);
        header("Location: ". $_SERVER['PHP_SELF']);
    }

    public function doEndUserSession()
    {
        unset($_SESSION['user_id']);
        session_destroy();
    }

    public function getWiget()
    {
        if ($this->isUserLogin()) {

            return $this->render("wiget-login.tpl.php");
        } else {
            return $this->render("wiget-guest.tpl.php");
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






    public  function  loginInto (){
        $data = $_POST;
        $this->doStartUserSession($data);
        // echo "Do Login";
    }
    public  function  login (){
        $this->content = $this->render ("login-form.tpl.php");
    }


    public function token()
    {
        $data1=$_GET;
        $data = $this->Model->getToken($data1);
        if($data){
            if($this->Model->activEmail($data)== 1)
                echo 'Спасибо за подтверждения Email-а';
            else
                echo 'Ваша ссылка на подтверждение не действительна';
        }
    }
    public function create()
    {
        // Логика 

        $data1 = $_POST;
        if($data1['pswd'] == $data1['pswd1']) {
            $data1['token'] = md5(uniqid($data1['email'], true));
            $data = $this->Model->Create($data1);
            $this->error = $data['errNum'] . $data['errText'];
            $this->SendEmail($data1);
        } else{
            $this->content = $this->render("register-form.tpl.php");
            echo "Пароли не совпадают!";
        }

    }

    public function SendEmail($data)
    {
        $port = ':81';
        $mail = new PHPMailer();
        try {
//          $mail->SMTPDebug = 2;
            $mail->isSMTP();
            $mail->CharSet = "UTF-8";
            $mail->Host = Config::$emailSmtp;
            $mail->SMTPAuth = true;
            $mail->Username = Config::$emailUser;
            $mail->Password = Config::$emailPswd;
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->setFrom('sanko200065@gmail.com', 'Hug.reed');
            $mail->addAddress($data['email']);
            $mail->isHTML(true);
            $mail->Subject = 'Подтверждение регистрации';
            $mail->Body = '<b>Ваш email: </b>' . $data['email'] . '<br> <b>Ваш пароль: </b>' . $data['pswd'] . '<br>'
                . 'Для подтверждения регистрации перейдите по ссылке: 
                <a href="http://' . $_SERVER['SERVER_NAME'] . $port . $_SERVER['PHP_SELF'] . '?token=' . $data['token'] . '"><b>Подтверждение</b></a>';
            $mail->send();
            echo 'Письмо с подтверждением регистрации отправлено';
        } catch (Exception $e) {
            echo "Сообщение не может быть отправлено. Ошибка: {$mail->ErrorInfo}";
        }
    }

    private $Model;

    /*
     *  Одиночка
     */
    private function __construct()
    {
        if (!$this->isUserLogin()) {
            session_start();
            $this->Model = new ModelUser();
        }
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