<?php
include 'conf/app.php';
include 'core/autoload.php';
ErrorHandler::SetHandler(ERROR_TYPES);
include 'routes.php';
?>
