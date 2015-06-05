<?php

class Container {

    /**
     * registered class dependencies.
     * @var array
     */
    private static $_depKeys = array();

    /**
     * initialize and registers dependencies from dependencies.php
     * @return void
     */
    public static function init()
    {
        $deps = include('dependencies.php');
        foreach ($deps as $key => $closure)
        { //allowing the user to register dependencies with both upercase
            // and lowercase letters in class names.
            static::$_depKeys[strtolower($key)] = $closure;
        }
    }

    /**
     * returns instance of $className
     * @param string $className required class
     * @throws Exception If class not found
     * @return mixed returns new $className instance
     */
    public static function getInstance($className)
    {

        $className = strtolower($className);
        if (static::containerHas($className))
        {
            return call_user_func(static::$_depKeys[$className]);
        }
        else
        {
            throw new Exception("No class found with the name:$className", 1);
        }
    }

    /**
     * registers dependencies in Container
     * @param string $className class name to register
     * @param Closure $closure closure to initiallize the dependencies
     * @return void
     */
    public static function register($className, Closure $closure)
    {
        $className = strtolower($className);
        /* if(static::containerHas($className))
        {
        throw new Exception("Class is alreay registered!", 1); //who knows :)

        } */
        static::$_depKeys[$className] = $closure;
    }

    /**
     * checks if a class dependency is registered
     * @param string $className class name
     * @return bool
     */
    public static function containerHas($className)
    {
        if (array_key_exists($className, static::$_depKeys))
            return true;
    }

}