<?php



include 'conf/app.php';
//include SMARTY_DIR . 'Smarty.class.php';
include 'core/autoload.php';
ErrorHandler::SetHandler(ERROR_TYPES);
include 'routes.php';
//
//$app = new Application();
//$app->run();
?>