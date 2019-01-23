<?php

class Menu{
public:	
	public function addEl($url,$text, $parent = 0 )
	{
		$this->menu [$this->count]['url'] = $url;
		$this->menu [$this->count]['text'] = $text;
		$this->menu [$this->count]['parent'] = $parent;
		$this->menu [$this->count]['children'] = false;

		if ($parent != 0 ){
			$this->menu [$parent]['children'] = true;
		}

	 	$this->count++;
		return $this->count-1;	
	}


	public function echoMenu ($parent = 0){
		$str = $this->getMenuHTML();

		if (strlen($str) > 0 ) {
			return " <!-- Востановленно из файла -->" . $str;
		}
		// ут может быть обращение к базе, куча версий и тд
		$ret = '<ul>';
		for($i = 1;$i < $this->count;$i++){
			if ($this->menu[$i]['parent'] == $parent){
				$ret.= '<li><a href="' . $this->menu[$i]['url'] . '">' . $this->menu[$i]['text'] . '</a>';
				if ($this->menu[$i]['children'] == true){
					$ret.= echoMenu($i);
				}

				$ret.='</li>';	
			}

		}
		$ret.= '</ul>';

		$this->saveMenuHTML($ret);

		return $ret;
	}

	public function saveMenuJson(){

		$handle = fopen($this->filePathJson, "w");
		fwrite($handle, json_encode($this->menu));
		fclose($handle);
	}

	public function loadMenuJson() {
		
		$str = file_get_contents ($this->filePathJson);
		$this->menu = json_decode( $str , true);
		$this->count = sizeof($this->menu);

	}

	public function saveMenuHTML($html) {

		$handle = fopen($this->filePathHTML, "w");
		fwrite($handle, $html);
		fclose($handle);
	}

	public function getMenuHTML (){
		return file_get_contents ($this->filePathHTML);
	}

	private $menu;
	private $count;
	private $filePathJson = "../database/data/menu.json";
	private $filePathHTML = "../public/cache/menu.html";


}