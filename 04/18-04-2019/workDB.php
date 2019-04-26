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
        default:
            echo "No Command";
    }
} else {
    $tbl->echoAll();
}