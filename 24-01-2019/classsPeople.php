<?php

//---  namespace Vendor/Project;

namespace Girafffee\Peoples;

class People {
	static $count;

	static function getClassName() {
		return __CLASS__;
	}

	public function __construct ($name){
		echo "Этот обьект создан " . __NAMESPACE__ . "<br/>";
		$this->createNatal();
		$this->setName($name);
		echo "Гороскоп составлен " . $this->name." = ".$this->goroskop . "<br>";
		self::$count++; // Увеличить счетчик		

	}

	public function __destruct (){
		echo $this->name;
	}


	public $name;
	
	public function getName () { // Вернуть имя
		return $this->name;
	}
	public function setName ($name) { // Установить имя
		$this->name = $name;
	}


	private $blood;
	
	public function getBlood () { // Вернуть имя
		return $this->blood;
	}
	public function setBlood ($blood) { // Установить имя
		$this->blood = $blood;
	}

	private $goroskop;
	private function createNatal(){
		$this->goroskop = rand(0,10);
	}
	
}

// 1. Обращение к саттической переменной снаружи
People::$count = 0; 

$sasha = new People("Alex");
$ira = new People("Irochka");
$masha = new People("Masha");
$dasha = new People("Dasha");

$sasha->setBlood("2+");
$ira->setBlood("1+");



echo "<h1> public = " . $sasha->name . " ... " . $ira->name . "</h1>";



$people[0] = $sasha;
$people[1] = $ira;
$people[2] = $masha;
$people[3] = $dasha;

for($i = 0; $i < sizeof($people); $i++){
	echo "<li>" . $people[$i]->getName(). "</li>";
}
echo "<footer><h3> Всего людей в матрице: " . People::$count;
echo "</h3>";
//echo "<br>";
echo "Название класса: " . People::getClassName();
echo "</footer>";
