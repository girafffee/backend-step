<?php

namespace App\Simpleform;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Form
{
	public $item = array();
	public $name;

	function __construct($name)
	{
		$this->name = $name;
		echo "++++";
	}

	public function getForm(){
		$ret = "<div>";
		if(isset($_GET["formName"]) && $_GET['formName'] == $this->name){
			$ret = "<pre>";
			$ret .= $this->doSend();
			$ret .= "</pre>";
		}else{
			$ret .= $this->buildForm();
		}
		$ret .= "</div>";
		return $ret;
	}
	public function doSend(){
		$ret = "<h3>Name = ". $_GET['Name'] . "</h3>\n\n";
		$ret .= "<h3>Phone = ". $_GET['Phone'] . "</h3>\n\n";
		$ret .= "<h3>Email = ". $_GET['Email'] . "</h3>\n\n";
		$ret .= "<h3>Message = ". $_GET['Message'] . "</h3>\n\n";

		return $ret;

	}	

	public function doSendEmail(){
		$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
	try {
		    //Server settings
		    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
		    $mail->isSMTP();                                      // Set mailer to use SMTP
		    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		    $mail->SMTPAuth = true;                               // Enable SMTP authentication
		    $mail->Username = 'sanko200065@gmail.com';                 // SMTP username
		    $mail->Password = 'KK1hD8TvkMwD';                           // SMTP password
		    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		    $mail->Port = 456;                                    // TCP port to connect to

		    //Recipients
		    $mail->setFrom('sanko200065@gmail.com', 'Ivanenko PHP Mailer test');
		    $mail->addAddress('sanko200065@gmail.com');     // Add a recipient
		    //$mail->addAddress('ellen@example.com');               // Name is optional
		    //$mail->addReplyTo('info@example.com', 'Information');
		    //$mail->addCC('cc@example.com');
		    //$mail->addBCC('bcc@example.com');

		    //Attachments
		    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

		    //Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = 'Here is the subject';
		    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
		    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		    $mail->send();
		    $ret = 'Message has been sent';

		} catch (Exception $e) {
	    $ret = 'Ошибка отправки сообщения. Mailer Error: '. $mail->ErrorInfo;
		}
		return $ret;
	}
	public function buildForm(){
		$ret = "<form action='".$_SERVER['PHP_SELF']."' method='GET'>";
		$ret .= "<input type='hidden' name='formName' value='".$this->name."' />\n";
		for($i = 0; $i < sizeof($this->item); $i++){
			$ret .= $this->item[$i] . "<br />\n";
		}
		$ret .= "</form>";
		return $ret;
	}

	public function addInput($name, $type = "text", $val = "" ){
		$this->item[] = "<input type = '" . $type . "' name = '".$name ."' value = '".$val."'/>";
	}

	public function addTextArea($name, $text = ""){
		$this->item[] = "<textarea name ='".$name."' > ".$text. "</textarea>"; 
	}
}