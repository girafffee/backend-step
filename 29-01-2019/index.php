<?php

include("app/simpleform/form.php");

$f = new Form("");

$f->addInput("Name");
$f->addInput("Phone");
$f->addInput("Email");

$f->addTextArea("Message", "Ваша информация");

$f->addInput("Send", "submit", "Отправить");

echo $f->getForm();
