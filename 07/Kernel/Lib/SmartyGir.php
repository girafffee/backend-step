<?php
namespace Kernel\Lib;

use App\Config;
use App\Layout\HeadController;

class SmartyGir
{
    protected static $config, $tplPath, $data, $cache_id;
    public static $smarty;

    protected static function RenderSmarty($tplPath, $data = '', $config = '', $cache_id = ''){
        self::$smarty = new \Smarty();
        /**
         * Settings for Smarty
         */
        self::setSettingsSmarty(false, true, 120);
        /**
         * Info for Smarty
         */
        self::geAllInfoSmartyTpl($tplPath, $data, $config, $cache_id);
        /**
         * Register all custom Functions
         */
        //self::regPlugins();


    }

    private static function setSettingsSmarty($debugging = false, $caching = false, $lifetime = 3600){
        self::$smarty->debugging = (bool)$debugging;
        self::$smarty->caching = (bool)$caching;
        self::$smarty->cache_lifetime = (int)$lifetime;


        self::$smarty->setConfigDir(Config::$pathToSmartyConfig)
                ->setTemplateDir(Config::$pathToTemplate)
                ->setCacheDir(Config::$pathToSmartyCache)
                ->setPluginsDir(Config::$pathToSmartyPlugins);
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

    /*
     * NOT USED
     */
    public static function assignPublic($name, $params){
        self::$smarty->assign($name, $params);
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


    protected static function display(){
        //Отображаем
        self::$smarty->display(self::$tplPath, self::$cache_id);
    }


    /*
     * FOR THE FUTURE
     * TO BUILD THE PLUGINS
     * [navigation menu]
     */
    private static function regPlugins(){
        echo "567506lkmhfghf";
        self::$smarty->registerPlugin("function", "title", "getTitle");

        echo "2323123";


        /**
         * It would be bigger..
         */
    }


    public static function setTitle($print_id = false){
        $default = self::getSomeConfigVar('title');
        $data = self::getTempVars('data|id, title');

        if(strlen($data['title']) > 0)
            $title = $data['title'] . ' - ' . $default;
        elseif($print_id) {
            if(is_array($data) AND isset($data['id']))
                $title = 'Page #' . $data['id'];
            else
                $title = 'Page #' . $data;
        }
        else
            $title = $default;

        return $title;
    }

    public static function getSomeConfigVar($name = ""){

        return self::$smarty->getConfigVars($name);
    }

    //EXAMPLE::data|id,title
    private static function getTempVars($string_vars){
        if(strlen($string_vars) > 0) {
            $array = explode("|", $string_vars);

            if (sizeof($array) > 1) {
                $vars = explode(",", $array[1]);
                if (sizeof($vars) > 1) {
                    $arr_vars = array();
                    $templ_vars = self::$smarty->getTemplateVars($array[0]);
                    foreach ($vars as $var){
                        $trimvar = trim($var);
                        $arr_vars[$trimvar] = $templ_vars[$trimvar];
                        unset($templ_vars[$trimvar]);
                    }
                    return $arr_vars;
                }
                else{
                    $templ_vars = self::$smarty->getTemplateVars($array[0]);
                    return $templ_vars[$vars[0]];
                }
            }
            else
                return self::$smarty->getTemplateVars($array[0]);
        }
        else
            return self::$smarty->getTemplateVars();
    }





}