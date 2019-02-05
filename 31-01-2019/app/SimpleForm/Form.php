<?php
namespace App\SimpleForm;

//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception; 

use App\Email\SendMail as PHPMailer;

class Form{
	public $item = array();
	public $name;
	public $email;
	public $nameEmail;
	public $Subject;
	public $Body;


	function __construct()
	{

	}
	private function setEmail(){
		if(filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)){
			$this->email = $_GET['email'];
		}
		else{
			$ret = $this->buildForm();
			return $ret;
		}
	}
	public function getEmail(){
		return $this->email;
	}

	private function setNameEmail(){
		$this->nameEmail = $_GET['name'];
	}
	public function getNameEmail(){
		return $this->nameEmail;
	}
	private function setSubject(){
		$this->Subject = $_GET['theme'];
	}
	public function getSubject(){
		return $this->Subject;
	}

	private function setBody(){
		$this->Body = $_GET['text'];
	}
	public function getBody(){
		return $this->Body;
	}

	public function setData(){
		$this->setEmail();
		$this->setNameEmail();	
		$this->setSubject();	
		$this->setBody();
	}


	public function getForm(){
		

		$ret = "<div>";
		if(isset($_GET["formName"]) && $_GET['formName'] == $this->name){
			$ret .= $this->doSend();	
		}else{
			$ret .= $this->buildForm();
		}
		$ret .= "</div>";
		return $ret;
	}
	



	public function doSend(){
		$ret = "<h3>Email = ". $this->email . "</h3>\n\n";
		$ret .= "<h3>Name = ". $this->nameEmail . "</h3>\n\n";
		$ret .= "<h3>Theme = ". $this->Subject . "</h3>\n\n";
		$ret .= "<h3>Message = ". $this->Body . "</h3>\n\n";

		$ret.= $this->doSendEmail($ret);
		
		return $ret;

	}	
/*
*
*/

	//public $str = "Проверка Email-рассылки.";

	public function doSendEmail(){
		$mail = new PHPMailer(true);         // Passing `true` enables exceptions
		$mail->doSend();
	}
/*
*
*/

	public function buildForm(){
		$ret = "<form action='".$_SERVER['PHP_SELF']."' method='GET'>";
		$ret .= "<input type='hidden' name='formName' value='".$this->name."' />\n";
		for($i = 0; $i < sizeof($this->item); $i++){
			$ret .= $this->item[$i] . "<br />\n";
		}
		$ret .= "</form>";
		return $ret;
	}

	public function addInput($name, $type = "text", $val = "", $placeholder = "Введите"){
		$this->item[] = "<input type = '" . $type . "' name = '".$name ."' value = '".$val."' 
		placeholder = '".$placeholder."'/>";
	}

	public function addTextArea($name, $text = ""){
		$this->item[] = "<textarea name ='".$name."' > ".$text. "</textarea>"; 
	}
}