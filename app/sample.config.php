<?php

// set your own variables in this file and rename it to 'config.php'

// framework specific configuration
const GRAFT_CONFIG = [
    // required
    '404Template' => '_404',
    'CookieLife' => 60 * 60 * 24 * 30, // 30 days
    'Debug' => true,
    'Timezone' => 'Europe/London',
    'ViewPath' => __DIR__ . '/Views/',
    // optional
    'DBHost' => '127.0.0.1',
    'DBName' => 'graft',
    'DBUser' => 'root',
    'DBPassword' => 'root',
    'DBPort' => 3306,
];

// Define the location of routes in packages
// the given class should have a public 'routes' array
const GRAFT_VENDOR_SETTINGS = [
   // 'GraftPHP\Clout\Setting',
];

// each route is an array
// don't include trailing slashes in the routes :)
// [url (string), controller (string), method (string)]
const GRAFT_HTTP_ROUTES = [
    ['/', 'App\Controllers\BlogController', 'index'],
    ['/store', 'App\Controllers\BlogController', 'store'],
    ['/{}/delete', 'App\Controllers\BlogController', 'delete'],
    ['/{}/update', 'App\Controllers\BlogController', 'update'],
];
