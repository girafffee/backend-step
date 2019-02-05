<?php

include_once ("../vendor/autoload.php");

use App\SimpleForm\Form;

$f = new Form("FormSimple");

$f->addInput("Name");
$f->addInput("Phone");
$f->addInput("Email");

$f->addTextArea("Message");

$f->addInput("Send", "submit", "Отправить");

echo $f->getForm();
