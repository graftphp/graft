<?php
// router to help development with the PHP built in web server
// example command:
// php -S localhost:8000 router.php

if (preg_match('/\.(?:png|jpg|jpeg|gif|ico)$/', $_SERVER['REQUEST_URI']) ||
	file_exists(__DIR__ . '/' . $_SERVER['REQUEST_URI'])) {
	return false;
} else {
	include_once 'index.php';
}
