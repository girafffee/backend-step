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
    // Проверка на право выполнения действий
    public function isUserCan($role){
        $user['role'] = $_SESSION['user_role']['roles'];
        if($user['role'] == $role)
            return true;
    }
    
    // Прооверка на роль пользователя
    public function isUserRole($array_roles){
        foreach($array_roles as $role){
            if($role == $_SESSION['user_role']['roles'])
                return true;
        }
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

    public function index(){
        if($this->isUserLogin()){
            $this->content = $this->render("auth-user.tpl.php");
        }else{
            $this->content = $this->render("guest.tpl.php");
        }
    }

    //Не нужна с новой формой
    public function register()
    {
        $this->content = $this->render("register-form.tpl.php");
    }



    public function doStartUserSession($data)
    {
        $_SESSION['user_id'] = $this->Model->getSessionId($data);
        $_SESSION['user_role'] = $this->Model->userRole();
        header("Location: ". $_SERVER['PHP_SELF']);

    }

    public function doEndUserSession()
    {
        unset($_SESSION['user_id']);
        session_destroy();
    }

    public  function  loginInto (){
        $data_form = $_POST;
        if($this->Model->checkIssetUser($data_form) == 1 AND strlen($data_form['email'])>3) {
            $_SESSION['email'] = $data_form['email'];
            $this->doStartUserSession($data_form);

        }
        else {
            $data['alert_type'] = "alert-dark";
            $data['response'] = '<p>Такого пользователя не существует.</p><br>
            <a href="'. RouteUser::getInstance()->getLoginLink().'"><button class="btn btn-light">Вернуться...</button></a>
            <a href="'. RouteUser::getInstance()->getNewPassLink().'" ><button class="btn btn-light">Восстановить пароль</button></a>';
            $this->answertpl($data);
        }

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
    public function answertpl($data){
        $this->content = $this->render ("answ-pass-form.tpl.php", $data);

    }
    
    public function adpanel(){
        $this->content = $this->render("service.tpl.php");
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
        if($this->Model->checkIssetUserEmail($data1) != 1) {
            if ($data1['pswd'] == $data1['pswd1']) {
                $data1['token'] = md5(uniqid($data1['email'], true));
                $port = ":81";
                $data1['subject'] = "Подтверждение: " . $data1['email'];
                $data1['body'] = '<b>Для подтверждения почты перейдите по</b>
                <a href="http://' . $_SERVER['SERVER_NAME'] . $port . $_SERVER['PHP_SELF'] .
                    '?token=' . $data1['token'] . '"><b>ссылке</b></a>';
                if ($this->SendEmail($data1)) {
                    $data = $this->Model->Create($data1);
                    $this->error = $data['errNum'] . $data['errText'];
                    $data['alert_type'] = "alert-success";
                    $data['response'] = '<h4 class="alert-heading">Успешная регистрация!</h4>
                <p>Для полной регистрации подтвердите свою почту, перейдя по ссылке в письме с темой:</p><br>
                <b>Подтверждение: ' . $data1['email'] . '</b><hr>';
                    
                }else{
                    $data['alert_type'] = "alert-danger";
                    $data['response'] = '<h4 class="alert-heading">Не удалось зарегистрироваться</h4>
                <p>Введите корректный <b>Email</b></p><br>
                <a href="'. RouteUser::getInstance()->getRegisterLink().'"><button class="btn btn-light">Вернуться...</button></a>';
                }
                $this->answertpl($data);

            } else {
                $this->content = $this->render("register-form.tpl.php", $data1);
                echo "Пароли не совпадают!";
            }
        }else{
            $this->content = $this->render("register-form.tpl.php");
            echo "Такой пользователь уже существует!";
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
            //echo "Сообщение не может быть отправлено. Ошибка: {$mail->ErrorInfo}";
            return false;
        }
    }

    public function checkEmail(){
        if(strlen($_POST['email']) >= 3){
            $data['email'] = $_POST['email'];
            if($this->Model->checkIssetUserEmail($data) == 1) {
                $token = md5(uniqid($data['email'], true));
                $port = ":81";
                $link = "http://" . $_SERVER['SERVER_NAME'] . $port . $_SERVER['PHP_SELF'] . "?tokenpass=" . $token;
                $data['subject'] = "Восстановить пароль: " . $data['email'];
                $data['body'] = '<b>Для сброса пароля перейдите по ссылке: </b> <br> <a href="' . $link . '"><b>Сбросить</b></a>';
                //Подкорректировать проверку на наличие юзверя

                $_SESSION['email'] = $data['email'];
                $_SESSION['link'] = $link;
                //Отправляем письмо с токеном
                if ($this->SendEmail($data)) {
                    $data['alert_type'] = "alert-success";
                    $data['response'] = '<p>Письмо успешно отправлено.</p>';
                }
            }
        }else {
            $data['alert_type'] = "alert-primary";
            $data['response'] = '<p>Ваш почта не зарегистрирована. Это можно сделать по 
            <a href="' . RouteUser::getInstance()->getRegisterLink() . '"><b>Ссылке</b></a> </p>';
        }
        $this->answertpl($data);
    }

    public function sessionEmail(){
        if (session_status() == PHP_SESSION_ACTIVE and isset($_SESSION['email']))
            return $_SESSION['email'];
        else
            return "Ссылка не действительна.";
    }

    public function updatePassword(){
        $data = $_POST;
        if($data['pswd'] == $data['pswd1'] AND strlen($data['pswd'])>2) {
            if ($this->Model->setNewPswd($data)) {
                $data['alert_type'] = "alert-success";
                $data['response'] = '<p>Пароль успешно сменен.</p>';

            } else {
                $data['alert_type'] = "alert-warning";
                $data['response'] = '<p>Произошла ошибка, либо введеный пароль совпадает с существующим.</p><br>
                <b><a href="' . RouteUser::getInstance()->getLoginLink() . '">Войти</a></b>
                 | <b><a href="' . $_SESSION['link'] . '">Повторить попытку</a></b>';
            }
            $this->answertpl($data);
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