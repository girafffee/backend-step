<?php
namespace App\Contactform;
use App\Layout\FormController;

/**
 * 
 */
class CFController  extends \Kernel\Base\BaseController
{
	var $Model;
	var $content;
	function __construct($action = "index"){
		if ($action == "index") {return $this->index();} // Нет нужного метода
		if ($action == "send") {return $this->send ();}
	}

	public function index (){
		$data['formTitle'] = "Contact Form";
		FormController::$data ['formTitle'] = "Contact form";
		$this->content =  self::render ('contactform.tpl.php', $data);
	}

	public function send (){		
		$data['formTitle'] = "Contact Form Send";
		FormController::$data ['formTitle'] = "Contact form was send";
		$this->content =  self::render ('contactform_send.tpl.php', $data);
	}


	function getContent () {return $this->content;}

}