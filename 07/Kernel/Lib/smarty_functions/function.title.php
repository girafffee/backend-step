<?php
use Kernel\Lib\SmartyGir;
/*
 * Smarty plugin
 * -------------------------------------------------------------
 * File:     function.title.php
 * Type:     function
 * Name:     title
 * Purpose:  outputs a random magic answer
 * -------------------------------------------------------------
 */
function smarty_function_title(){
    $data = SmartyGir::getTempVars('data');
    if(!strlen($data['title']) > 0)
        return SmartyGir::$smarty->getConfigVars('title');
    else
        return $data['title'];
}