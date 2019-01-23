<?php

function getHead($data){
	include_once ("../resources/view/mydesign/head.tpl.php");
}

function getHeader($data){
	// include_once ("../resources/view/mydesign/header.tpl.php");
}

function getFooter($data){
	include_once ("../resources/view/mydesign/footer.tpl.php");
}

function buildPage( $data){
	echo '<!DOCTYPE html><html lang="ru" class="no-js">';
	getHead ($data['head']);
	echo '<body>';
	getHeader($data['header']);
	echo '<div class="container">';
	echo $data['content'];
	echo '</div>';
	getFooter($data['footer']);
	echo '</body></html>';
}