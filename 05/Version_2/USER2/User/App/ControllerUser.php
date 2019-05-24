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
    
    public function logout(){
        $this->doEndUserSession();
    }
    public function newpswd(){
        $this->content = $this->render ("send-pass-form.tpl.php");
    }
    public function tokenpass(){
        $this->content = $this->render ("upd-pass-form.tpl.php");
    }
    public function resetpswd($data){
        $this->content = $this->render ("answ-pass-form.tpl.php", $data);
    }



    public function token()
    {
        $data1=$_GET;
        $data = $this->Model->getToken($data1);
        if($data){
            if($this->Model->activEmail($data) == 1)
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
            $port = ":81";
            $data1['subject'] = "Подтверждение: " . $data1['email'];
            $data1['body'] = '<b>Для подтверждения почты перейдите по</b>
                <a href="http://' . $_SERVER['SERVER_NAME'] . $port . $_SERVER['PHP_SELF'] .
                '?token=' . $data1['token'] . '"><b>ссылке</b></a>';
            $this->SendEmail($data1);
        } else{
            $this->content = $this->render("register-form.tpl.php");
            echo "Пароли не совпадают!";
        }

    }

    public function SendEmail($data)
    {
        $mail = new PHPMailer();
        try {
//            $mail->SMTPDebug = 2;
            $mail->isSMTP();
            $mail->CharSet = "UTF-8";
            $mail->Host = Config::$emailSmtp;
            $mail->SMTPAuth = true;
            $mail->Username = Config::$emailUser;
            $mail->Password = Config::$emailPswd;
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->setFrom(Config::$emailUser, 'Hug.reed');
            $mail->addAddress($data['email']);
            $mail->isHTML(true);
            $mail->Subject = $data['subject'];
            $mail->Body = $data['body'];
            if($mail->send())
                return true;
        } catch (Exception $e) {
            echo "Сообщение не может быть отправлено. Ошибка: {$mail->ErrorInfo}";
        }
    }
    public function checkEmail(){
        if(strlen($_POST['email']) >= 3){
            $data['email'] = $_POST['email'];
            $token = md5(uniqid($data['email'], true));
            $port = ":81";
            $data['subject'] = "Восстановить пароль: " . $data['email'];
            $data['body'] = '<b>Для сброса пароля перейдите по ссылке: </b> <br> 
                <a href="http://' . $_SERVER['SERVER_NAME'] . $port . $_SERVER['PHP_SELF'] .
                '?tokenpass=' . $token . '"><b>Сбросить</b></a>';
            //Подкорректировать проверку на наличие юзверя
            $checkdata = $this->Model->checkIssetUser($data);

            if ($checkdata['count'] == 1){
                $_SESSION['email'] = $data['email'];
                //Отправляем письмо с токеном
                if($this->SendEmail($data)) {
                    $data['alert_type'] = "alert-success";
                    $data['response'] = '<p>Письмо успешно отправлено.</p>';
                }
            }else{
                $data['alert_type'] = "alert-primary";
                $data['response'] = '<p>Ваш почта не зарегистрирована. Это можно сделать по 
                <a href="'.\App\RouteUser::getInstance()->getRegisterLink().'"><b>Ссылке</b></a> </p>';
            }
            $this->resetpswd($data);

        }
    }
    public function sessionEmail(){
        if (session_status() == PHP_SESSION_ACTIVE and isset($_SESSION['email']))
            return $_SESSION['email'];
        else
            return "Ссылке не действительна.";
    }

    public function updatePassword(){
        $data = $_POST;
        if($data['pswd'] == $data['pswd1'])
            if($this->Model->setNewPswd($data)) {
                $data['alert_type'] = "alert-success";
                $data['response'] = '<p>Пароль успешно сменен.</p>';
                $this->resetpswd($data);
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