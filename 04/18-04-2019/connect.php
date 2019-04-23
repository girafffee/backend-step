<?php

$config = require_once 'config.php';
$dsn = "mysql:host=".$config['host'].";dbname=".$config['dbname'].";charset=".$config['charset'];

try {
    $dbh = new PDO($dsn, $config['user'], $config['pass']);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

