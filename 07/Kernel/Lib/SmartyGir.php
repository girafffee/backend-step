<?php
namespace Kernel\Lib;

use App\Config;

class SmartyGir
{
    public static $smarty, $config, $tplPath, $data, $cache_id;

    public static function RenderSmarty($tplPath, $data = '', $config = '', $cache_id = ''){
        self::$smarty = new \Smarty();
        /**
         * Settings for Smarty
         */
        self::setSettingsSmarty(false, true, 86400);
        /**
         * Info for Smarty
         */
        self::geAllInfoSmartyTpl($tplPath, $data, $config, $cache_id);
    }

    private static function setSettingsSmarty($debugging = false, $caching = false, $lifetime = 3600){
        self::$smarty->debugging = (bool)$debugging;
        self::$smarty->caching = (bool)$caching;
        self::$smarty->cache_lifetime = (int)$lifetime;

        self::$smarty->setConfigDir(Config::$pathToSmartyConfig);
        self::$smarty->setTemplateDir(Config::$pathToTemplate);
        self::$smarty->setCacheDir(Config::$pathToSmartyCache);
    }

    private static function getConfig(){
        if(!empty(self::$config)) {
            //Парсим название конфигурационного файла
            //на наличие секции
            $conf_section = explode("|", self::$config);

            if(sizeof($conf_section)>1)
                self::$smarty->configLoad($conf_section[0] . '.conf', $conf_section[1]);
            else
                self::$smarty->configLoad($conf_section[0] . '.conf');
        }
    }
    private static function getData(){
        //Передаем параметры в шаблон
        if(!empty(self::$data))
            self::$smarty->assign('data', self::$data);
    }
    protected static function display(){
        //Отображаем
        self::$smarty->display(self::$tplPath, self::$cache_id);
    }


    private static function geAllInfoSmartyTpl($tplPath, $data = '', $config = '', $cache_id = ''){
        if(isset($tplPath))
            self::$tplPath = $tplPath;
        if(isset($data))
            self::$data = $data;
        if(isset($config))
            self::$config = $config;
        if(isset($cache_id))
            self::$cache_id = $cache_id;

        self::getConfig();
        self::getData();
    }


}