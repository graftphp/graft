<?php
const GRAFT_CONFIGPATH = '../App/config.php';
if (!file_exists(GRAFT_CONFIGPATH)) {
	die('Config file missing');
}
require GRAFT_CONFIGPATH;
require '../vendor/graftphp/clout/src/Util/helpers.php';
date_default_timezone_set(GRAFT_CONFIG['Timezone']);

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

GraftPHP\Framework\Framework::Route();
