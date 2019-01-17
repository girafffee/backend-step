<?php


function buildArticle  ($data){
	$str = "<article";

	if (isset ($data['css']) )
		$str.= ' class="' . $data['css'] . '"';

	$str.= "><header><h1>". $data['title'] . "</h1></header>
	<img src=". $data['img'] . ">
	<div>
		<details>". $data['content'] . "</details>
	</div>";
	if (isset ($data['comment']) && !empty($data['comment']) ) {
		$str.= "<footer><span> ". checkVar($data, 'comment') . "</span></footer>";
	}
	$str.= "</article>";

return $str;

}

function checkVar($arr, $key)
{
	if (isset($arr[$key])) {
		return $arr[$key];
	}
	else {
		return "";
	}
}


function buildArticleTpl($data)
{
	// include "../resources/view/mydesign/article.tpl.php";
}