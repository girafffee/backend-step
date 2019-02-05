<?php

include_once ("../vendor/autoload.php");


use App\Univer\Calc;
use App\Univer\Univer;
use App\Univer\PrettyDiv;
use App\Univer\Departments\Departments;
use App\Univer\Departments\Biochemistry\Students;
use App\Univer\Departments\Biochemistry\Leadership;
use App\Univer\Departments\Biochemistry\Leadership\Decan;
use App\Univer\Departments\Biochemistry\Students\Student;

$ret = "";
//$num = new Calc();

$mnu = new Univer();
$dep = new Departments();
$studs = new Students();
$lead = new Leadership();
$dec = new Decan();
$stud = new Student();

$ret .= $mnu->GetDataIn("МНУ ім. В. О. Сухомлинського");
$ret .= $dep->GetDataIn(12);
$ret .= $studs->GetData();
$ret .= $lead->GetData();
$ret .= $dec->GetDataIn("Иванов Иван Иванович");
$ret .= $stud->GetDataIn("Попов Вениамин Артемович");
$ret .= $stud->callStudInfo();

$ret .= Calc::$i . " объектов.";
$ret = PrettyDiv::BuildDiv($ret);


echo $ret;

/*
use App\SimpleForm\Form;
 
//	Рассылка на Email

$f = new Form("FormSimple");
$f->addInput("email","","","Введите почту получателя");
$f->addInput("name","","","Введите имя отправителя");
$f->addInput("theme","","","Введите тему сообщения");
$f->addTextArea("text", "Это стандартный набор слов.");
$f->addInput("Send", "submit", "Отправить");
echo $f->getForm(); */
