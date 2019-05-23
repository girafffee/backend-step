<?php

namespace App;


/**
 *
 */
class BaseController
{

    public static function render($tplPath, $data = '')
    {
        // включаем буфер
        ob_start();
        include(Config::$pathToUserTemplate . $tplPath);

        // сохраняем всё что есть в буфере в переменную $content
        $content = ob_get_contents();

        // отключаем и очищаем буфер
        ob_end_clean();

        return $content;
    }

}