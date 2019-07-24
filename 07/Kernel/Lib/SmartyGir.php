<?php
namespace Kernel\Lib;

use App\Config;
use Kernel\Base\BaseController;

class SmartyGir
{
    public static $smarty, $config, $tplPath, $data;

    public static function RenderSmarty($tplPath, $data = '', $config = ''){
        self::$smarty = new \Smarty();
        /**
         * Settings for Smarty
         */
        self::setSettingsSmarty();
        /**
         * Info for Smarty
         */
        self::geAllInfoSmartyTpl($tplPath, $data, $config);
    }

    private static function setSettingsSmarty(){
        self::$smarty->debugging = false;
        self::$smarty->caching = false;
        self::$smarty->setTemplateDir(Config::$pathToTemplate);
        self::$smarty->cache_lifetime = 86400;
        self::$smarty->setConfigDir(Config::$pathToSmartyConfig);
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
        self::$smarty->display(self::$tplPath);
    }


    private static function geAllInfoSmartyTpl($tplPath, $data = '', $config = ''){
        if(isset($tplPath))
            self::$tplPath = $tplPath;
        if(isset($data))
            self::$data = $data;
        if(isset($config))
            self::$config = $config;

        self::getConfig();
        self::getData();
    }


}