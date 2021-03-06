<?php
// Establish config file is present, and load
const GRAFT_CONFIGPATH = '../app/config.php';
if (!file_exists(GRAFT_CONFIGPATH)) {
    die('Config file missing');
}
require GRAFT_CONFIGPATH;

// Debug mode, verbose errors and disable caching
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

date_default_timezone_set(GRAFT_CONFIG['Timezone']);

if (!session_start()) {
    die('Unable to start session');
}

require '../vendor/autoload.php';

$url = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : explode('?', $_SERVER['REQUEST_URI'])[0];

$graftFramework = new GraftPHP\Framework\Framework();

if ($destination = $graftFramework->matchRoute($url)) {
    $obj = new $destination[1];
    call_user_func_array(
        [$obj, $destination[2]],
        $result
    );
} else {
    GraftPHP\Framework\View::Error404();
}
