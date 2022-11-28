<?php

require_once './app/Config/Config.php';

require_once "./app/helpers/functions.php";

/**
 * Error reporting
 */
error_reporting(E_ALL);
//set_error_handler('errorHandler');
//set_exception_handler('exceptionHandler');


/**
 * for autoload to work in libraries the class name needs to match the file name -- exactly ie Controller - Controller
 */
// Autoload Core
spl_autoload_register(function ($className) {
    require_once './app/Core/' . $className . '.php';
});
// Init Core
$init = new Core();