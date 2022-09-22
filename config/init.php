<?php

define("DEBUG", 0);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/garant/core');
define("LIBS", ROOT . '/vendor/garant/core/libs');
define("CACHE", ROOT . '/tmp/cache');
define("CONFIG", ROOT . '/config');
define("LAYOUT", 'garant');

//http://localhost/garant-food.kiev.ua/public/index.php
$app_path = "https://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
//http://localhost/garant-food.kiev.ua/public/
$app_path = preg_replace("#[^/]+$#", '', $app_path);
//http://localhost/garant-food.kiev.ua/
$app_path = str_replace('/public/', '', $app_path);
define("PATH", $app_path);
define("ADMIN", PATH . '/admin');

require_once ROOT . '/vendor/autoload.php';