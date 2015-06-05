<?php

class RouterHelper {
    private static $templateEngine,
                   $router;
    private static function setRouterInstance(){
        self::$router = new Router(self::$templateEngine);
    }
    private static function init(){
        self::setRouterInstance();
    }
    public static function get(){
        self::init();
        $args = func_get_args();
        if( count($args) == 2){
            self::$router->get($args[0],$args[1]);
        }else if( count($args) == 3){
            self::$router->get($args[0],$args[1],$args[2]);
        }
    }
    public static function post(){
        self::init();
        $args = func_get_args();
        if( count($args) == 2){
            self::$router->post($args[0],$args[1]);
        } else if( count($args) == 3){
            self::$router->post($args[0],$args[1],$args[2]);
        }
    }
} 