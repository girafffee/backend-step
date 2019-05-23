<?php

namespace App;

/**
 *
 */
final class Config
{

    // Путь к файлам View (шаблон)
    public static $pathToTemplate = __DIR__ . '/../resources/view/mydesign/';
    public static $pathToUserTemplate = __DIR__ . '/view/';
    // Путь к файлам Storage
    public static $pathToStorage = __DIR__ . '/../storage/';
    // Имя сайта
    public static $appSiteName = " Titicaca ";

    // Настройки почты
    public static $emailSmtp = "smtp.gmail.com";
    public static $emailUser = "sanko200065@gmail.com";
    public static $emailPswd = "KK1hD8TvkMwD";

    // Настройки базы
    public static $DBhost = "localhost";
    public static $DBport = 3306;
    public static $DBname = "c13girafffee";
    public static $DBuser = "c13db";
    public static $DBpswd = "SaNkO20001221";
    //*------------------------------------------------------------
    // Обеспечение единственной копии класса
    private function __construct()
    {
    }

    private static $instance;

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}

