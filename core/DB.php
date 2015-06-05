<?php

class DB {
    private static $DBHandler;
    private static function getDBHandlerInstance(){
        $DBHandlerClassName = ucfirst(DB_TYPE)."DBHandler";
        self::$DBHandler = new $DBHandlerClassName();
    }
    private static function init(){
        self::getDBHandlerInstance();
    }
    public static function execute($sqlQuery,$params = null){
        self::init();
        return self::$DBHandler->execute($sqlQuery,$params);
    }
    public static function getAll($sqlQuery,$params = null){
        self::init();
        return self::$DBHandler->getAll($sqlQuery,$params);
    }
    public static function getRow($sqlQuery,$params = null){
        self::init();
        return self::$DBHandler->getRow($sqlQuery,$params);
    }
    public static function getOne($sqlQuery,$params = null){
        self::init();
        return self::$DBHandler->getOne($sqlQuery,$params);
    }
    public static function open(){
        self::init();
        return self::$DBHandler->open();
    }
    public static function close(){
        self::init();
        return self::$DBHandler->close();
    }
} 