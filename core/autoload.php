<?php
spl_autoload_register(function ($class) {
    if ($class == "Smarty") {
        require_once("libs/smarty/Smarty.class.php");
        return true;
    }
    $dirs = array(
        'biz',
        'controllers',
        'controllers/front',
        'controllers/admin',
        'core',
        'core/helpers',
        'libs',
        'models');

    foreach ($dirs as $dir) {
        $filename = "$dir/" . $class . ".php";
        if (file_exists($filename)) {
            require_once($filename);
            return true;
        }
    }
    return false;
});

Container::init();







