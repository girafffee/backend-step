<?php

require_once ("vendor/autoload.php");
$smarty = new Smarty();
$smarty->debugging = false;
$smarty->caching = true;
$smarty->cache_lifetime = 86400;

/**
 * По-хорошему здесь идёт выгрузка меню
 * из базы
 */
$navmenu = array(
        'Home'          => array(
            'url'           => '#',
            'li_class'      => 'current'),
        'About'         => 'about-us.php',
        'Hotels'        => 'hotels.php',
        'Presentations' => 'presentation.php',
        'Photos'        => 'photos.php',
        'Contact Us'    => 'contact-us.php',
        'Apply'         => array(
            'url'           => 'apply.php',
            'a_class'       => 'btn round-btn')
);

$smarty->assign('menus', $navmenu);


$smarty->display("index.tpl");

