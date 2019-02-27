<?php
namespace App\ContactForm;

/**
 *
 */
class CFController 
{

	function __construct(){
	}

	function getContent($action = "none"){
		if($action = "show") {
			$ret = '
			<div>
			    <form>
			        <div>

			            <label for="name">Name:</label>
			            <input type="text" class="input" id="name" placeholder="John Doe">

			            <label for="email">Email:</label>
			            <input type="email" class="input" id="email" placeholder="john.doe@email.com">

			            <label for="message">Message:</label>
			            <textarea class="input textarea" id="message" placeholder="Your message here"></textarea>    

			             <input type="submit" class="button" value="Send message">

			        </div>
			    </form>
			</div>';
			return $ret;
		}
		if($action = "none"){
			return 0;
		}
	}
}
