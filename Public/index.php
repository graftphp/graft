<?php
require '../App/config.php';

date_default_timezone_set('Europe/London');

// optional debug mode, verbose errors and disable caching
if (GRAFT_CONFIG['Debug']) {
    // verbose error reporting
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');

    // prevent caching
    header("Expires: 0");
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header("cache-control: no-store, no-cache, must-revalidate");
    header("Pragma: no-cache");
} else {
    error_reporting(0);
    ini_set('display_errors', 'Off');
}

if (!session_start()) {
    die('Unable to start session');
}

require '../vendor/autoload.php';

function d($var, $die = false) {
    ob_start();
    var_dump($var);
    $r = '<pre>' . ob_get_clean() . '</pre>';
    echo $r;
    if ($die) {
        die();
    }    
}

function dd($var) {
    d($var, true);
}

GraftPHP\Framework\Framework::Route();
