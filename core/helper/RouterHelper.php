<?php

namespace Helper;
use Router;
class RouterHelper{
    private static $router;
    private static function makeInstance(){
        if(!isset(self::$router)){
            self::$router = new Router();
        }
    }
    public static function get($path,$controller,$method){
        self::makeInstance();
        return self::$router->get($path,$controller,$method);
    }
    public static function post($path,$controller,$method){
        self::makeInstance();
        return self::$router->post($path,$controller,$method);
    }
}