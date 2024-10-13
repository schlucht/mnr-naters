<?php

defined('ROOTPATH') OR exit('No direct script access allowed');

if($_SERVER['SERVER_NAME'] == 'localhost')
{
    define('ROOT', 'http://localhost/mnr/');
    define('HOST', 'localhost');
    define('DBNAME', 'mnr-naters');
    define('DBUSER', 'root');
    define('DBPW', '');
}else
{
    $requestScheme = $_SERVER['REQUEST_SCHEME'];
    $requestHost = $_SERVER['HTTP_HOST'];
    define('ROOT', $requestScheme . "://" . $requestHost . "/mnr");
    define('HOST', '');
    define('DBNAME', '');
    define('DBUSER', '');
    define('DBPW', '');
}

define('PREFIX', 'OTS\\');
// ROOT PATHS
define('STYLE', ROOT . "/assets/css");
define('IMG', ROOT . "/assets/images");
define('CODE', ROOT . "/assets/js");
define('LOGOS', ROOT . "/assets/logos");

define('SNIPPET', __DIR__ . "/../Snippets/");

define ('APP_NAME', "MNR-Naters");
define ('APP_DESC', 'MNR-Naters');

define('DEBUG', true);