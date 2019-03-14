<?php
namespace App\Contactform;
use App\Layout\HeaderController;

/**
 * 
 */
class CFController  extends \Kernel\Base\BaseController
{
	var $Model;
	var $content;
	function __construct($action = "index"){
		if ($action == "index") { $this->index(); return; }; // Нет нужного метода
		if ($action == "send") { $this->send (); return;};
	}

	public function index (){
		$data['pageTitle'] = "Contact Form";
		HeaderController::$data ['pageTitle'] = "Contact form";
		$this->content =  self::render ('contactform.tpl.php', $data);
	}

	public function send (){
		$this->Model = new CFModel();
		$this->Model->send();
		
		HeaderController::$data ['pageTitle'] = "Contact form send";
		$data['pageTitle'] = "Contact Form Send";
		$this->content =  self::render ('contactform_send.tpl.php', $data);
	}



	function getContent () {return $this->content;}

}