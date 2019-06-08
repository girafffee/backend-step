<?php

namespace User;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

use User\Config;

/**
 *
 */
class BaseController
{

    public static function render($tplPath, $data = '')
    {
        // включаем буфер
        ob_start();
        include(Config::$pathToUserTemplate . $tplPath);

        // сохраняем всё что есть в буфере в переменную $content
        $content = ob_get_contents();

        // отключаем и очищаем буфер
        ob_end_clean();

        return $content;
    }

    public function SendEmail($data)
    {
        $mail = new PHPMailer();
        try {
//          $mail->SMTPDebug = 2;
            $mail->isSMTP();
            $mail->CharSet = "UTF-8";
            $mail->Host = 'smtp.mail.ru';
            $mail->SMTPAuth = true;
            $mail->Username = 'pentakl@inbox.ru';
            $mail->Password = 'S5Zexswf4rICY4SjPS4v';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->setFrom('pentakl@inbox.ru', 'Oleg');
            $mail->addAddress($data['email']);
            $mail->isHTML(true);
            $mail->Subject = $data['subject'];
            $mail->Body = $data['body'];
            $mail->send();
            echo $data['send'];
        } catch (Exception $e) {
            echo "Сообщение не может быть отправлено. Ошибка: {$mail->ErrorInfo}";
        }
    }

}