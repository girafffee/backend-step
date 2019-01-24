<?php


// $this->[имя переменной] - возвращает переменную 
// $this->[имя метода]() - вызывает указаный метод

$userLogin ="Глобальная переменная";

function getFromFun(){
	$userLogin = "Inside function";
	return $userLogin;
}

function getGlobalFun(){
	GLOBAL $userLogin;
	return $userLogin;
}


class someClass {
	public $userLogin = "Переменная внутри класса";

	public function getVar(){
		return $this->userLogin;		
	}
	public function getSecondVar(){
		$userLogin = "Переменная внутри второго метода";

		return $userLogin;		
	}

}

$s = new someClass; // user - Sasha
$i = new someClass; //  user - Ira
?>

<h1> Выводим переменные </h1>

<?php

echo "<p> Глобально = ".$userLogin."</p>";
echo "<p> Внутри функции = ".getFromFun()."</p>";
echo "<p> Вернуть из класса Sasha= ".$s->getVar()."</p>";
echo "<p> Вернуть переменную из метода класса Ira  = ".$i->getSecondVar()."</p>";
echo "<p> Глобально в методе = ".getGlobalFun()."</p>";


