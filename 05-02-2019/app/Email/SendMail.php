<?php
namespace App\Email;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception; 
use App\SimpleForm\Form;

/**
 * 
 */

$form = new Form("");
class SendMail extends PHPMailer
{
	
	function __construct()
	{
			$this->SMTPDebug = 2;                                 // Enable verbose debug output
		    $this->isSMTP();                                      // Set mailer to use SMTP
		    $this->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		    // $this->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		    $this->SMTPAuth = true;                               // Enable SMTP authentication
		    $this->Username = 'noreply.girafffee@gmail.com';                 // SMTP username
		    //$this->Username = 'nikitin_a@itstep.org';                 // SMTP username
		    $this->Password = 'SaNkO20001221';                           // SMTP password
		    $this->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		    $this->Port = 465;                                    // TCP port to connect to

		    //Recipients
		    $this->setFrom('noreply.girafffee@gmail.com', $form->getNameEmail());
		    // $this->setFrom('nikitin_a@itstep.org', 'Nykytin PHP Mailer test');
		    $this->addAddress($form->getEmail());     // Add a recipient
		    //$this->addAddress('ellen@example.com');               // Name is optional
		    //$this->addReplyTo('info@example.com', 'Information');
		    //$this->addCC('cc@example.com');
		    //$this->addBCC('bcc@example.com');

		    //Attachments
		    //$this->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		    //$this->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

		    //Content
	}

	public function doSend(){
		try {
		    $this->isHTML(true);                                  // Set email format to HTML
		    $this->Subject = $form->getSubject();
		    $this->Body    = $form->getBody();
		    $this->AltBody = "Проверка Email-рассылки.";

		    $this->send();
		    $ret = 'Сообщение отправлено';
		} catch (Exception $e) {
	    	$ret = 'Ошибка отправки сообщения. Mailer Error: '. $this->ErrorInfo;
		}
		return $ret;
	}
}