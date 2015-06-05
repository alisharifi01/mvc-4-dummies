<?php

include 'messages.php';
define('SITE_ROOT_URL',defineSiteRootUrl());
//template engine
define("TEMPLATE_ENGINE","smarty");
// DIR configs
define("SITE_ROOT", dirname(dirname(__FILE__)));
define("VIEW_DIR", SITE_ROOT . '/views/');
define("CONTROLLER_DIR", SITE_ROOT . '/controllers/');
define("MODEL_DIR", SITE_ROOT . '/models/');
define("CORE_DIR", SITE_ROOT . '/core/');
define("LIBS_DIR", SITE_ROOT . '/libs/');
//DIR configs about views
define('SMARTY_DIR', SITE_ROOT . '/libs/smarty/');
define('TEMPLATE_DIR', VIEW_DIR . 'templates');
define('VIEW_CACHE_DIR', VIEW_DIR . 'cache');
define('VIEW_CONFIG_DIR', VIEW_DIR . 'configs');
define('COMPILE_DIR', VIEW_DIR . 'templates_c');
//DB configs
define('DB_PERSISTENCY', 'true');
define('DB_SERVER', 'localhost');
define('DB_TYPE','mysql');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'mvc_4_dummies');
define('PDO_DSN', 'mysql:host=' . DB_SERVER . ';dbname=' . DB_DATABASE);

define('IS_WARNING_FATAL', true);
define('DEBUGGING', true);
// The error types to be reported
define('ERROR_TYPES',E_ALL);

// Settings about mailing the error messages to admin
define('SEND_ERROR_MAIL', false);
define('ADMIN_ERROR_MAIL', 'info@your-domain.com');
define('SENDMAIL_FROM', 'info@your-domain.com');
ini_set('sendmail_from', SENDMAIL_FROM);

// By default we don't log errors to a file
define('LOG_ERRORS', true);
define('LOG_ERRORS_FILE', 'error-logs.txt'); // Windows
 //define('LOG_ERRORS_FILE', '/home/username/tshirtshop/errors.log'); // Linux
define('SITE_GENERIC_ERROR_MESSAGE','internete shoma kharab ast');

?>
