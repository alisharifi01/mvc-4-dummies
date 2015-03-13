<?php
spl_autoload_register(function ($class) {
    if ($class == "Smarty") {
        require_once("libs/smarty/Smarty.class.php");
        return true;
    }
    $dirs = array(
        'biz',
        'controllers',
        'core',
        'core/helper',
        'lib',
        'model');

    foreach ($dirs as $dir) {
        $filename = "$dir/" . $class . ".php";
        if (file_exists($filename)) {
            require_once($filename);
            return true;
        }
    }
    return false;
});