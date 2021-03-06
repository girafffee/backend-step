<?php
namespace App\Contactform;
use App\Layout\FormController;

/**
 * 
 */
class CFController  extends \Kernel\Base\BaseController
{
	private $Model;
	private $content;
	function __construct($action = "index"){
		if ($action == "index") {return $this->index();} // Нет нужного метода
		if ($action == "send") {return $this->send ();}
	}

	private function index (){
		$data['formTitle'] = "Contact Form";
		FormController::$data ['formTitle'] = "Contact form";
		$this->content =  self::render ('contactform.tpl.php', $data);
	}

	private function send (){		
		$data['formTitle'] = "Contact Form Send";
		FormController::$data ['formTitle'] = "Contact form was send";
		$this->content =  self::render ('contactform_send.tpl.php', $data);
	}


	function getContent () {return $this->content;}

}