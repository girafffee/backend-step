<?php

//*--------------------------------------------------------------
function getSelect ( $minN = 1,  $maxN = 20 ){
	$str = "<select>";
	for ($i = $minN; $i < $maxN ; $i++) { 
		$str.= "<option>"; // $a.= $b ==> $a = $a + $b;
		$str.= $i; 
		$str.= "</option>";
	}
	$str.= "</select>";
	return $str;
}


