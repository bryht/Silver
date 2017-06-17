<?php

define('SILVER', realpath(__DIR__) . '/');
define('APP', SILVER.'app/');
define('API', APP . 'api/');
define('CONTROL', APP . 'control/');
define('VIEW', APP . 'view/');
define('CACHE', SILVER.'cache/');
define('LOG', CACHE . 'log/');
define('CORE', SILVER.'core/');
define('UPLOAD',SILVER.'upload/');
define('VENDOR', SILVER.'vendor/');

define('APICOMMAND', '\app\api\\');
define('CONTROLCOMMAND', '\app\control\\');
define('VIEWCOMMAND', '\app\view\\');

define('DEBUG', true);

require CORE . 'Function.php';
require CORE . 'Silver.php';
require VENDOR . 'autoload.php';

spl_autoload_register('core\Silver::load');

if (DEBUG) {
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();

} else {
    //error_reporting(0);
    set_error_handler('errorHandler');
    register_shutdown_function('fatalErrorHandler');
}

core\Silver::run();
