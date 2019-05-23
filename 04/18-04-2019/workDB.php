<?php
require 'MySqlTableWork.php';

$tbl = new MySqlTableWork("colors");

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'del':
            $tbl->echoDel();
            break;
        case 'edit':
            $tbl->echoEdit();
            break;
        case 'saveEdit':
            $tbl->echoSaveEdit();
            break;
        case 'viewAdd':
            $tbl->echoAddForm();
            break;
        case 'addField':
            $tbl->addField();
            break;
        default:
            echo "No Command";
    }
} else {
    $tbl->echoAll();
}