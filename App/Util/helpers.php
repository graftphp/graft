<?php

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
