<?php
$data = $_POST;

if(is_array($data)) {
    echo "Received data:" . $data['name'] . " " . $data['lastname'] . "<br/>";
    echo "<pre>";
    var_dump($data);
    echo "</pre>";

}
else
    return false;
