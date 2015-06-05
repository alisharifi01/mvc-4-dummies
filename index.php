<?php

    session_start();

    include 'core/helpers/functions.php';
    include 'conf/app.php';
    include 'core/autoload.php';

    ErrorHandler::setHandler();

    include 'routes.php';







