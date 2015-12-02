<?php

// set your own variables in this file and rename it to 'config.php'

// framework specific configuration
const GRAFT_CONFIG = [
    // required
    '404Template' => '_404',
    'CookieLife' => 60 * 60 * 24 * 30, // 30 days
    'Debug' => true,
    'DefaultTemplate' => '_SampleTemplate',
    'ViewPath' => __DIR__ . '/views/',
    // optional
    'DBHost' => '127.0.0.1',
    'DBName' => 'test',
    'DBUser' => 'root',
    'DBPassword' => '',
];

// each route is an array
// don't include trailing slashes in the routes :)
// [url (string), controller (string), method (string)]
const GRAFT_ROUTES = [
    ['/admin/login', 'App\Controllers\UserController', 'login'],
    ['/admin/logout', 'App\Controllers\UserController', 'logout'],
    ['/sample/add', 'App\Controllers\SampleController', 'add'],
    ['/sample/delete', 'App\Controllers\SampleController', 'delete'],
    ['/', 'App\Controllers\SampleController', 'index'],
];

// Define the location of routes in packages
// the given class should have a public 'routes' array
const GRAFT_VENDOR_SETTINGS = [
   // 'GraftPHP\Clout\Settings',
];
