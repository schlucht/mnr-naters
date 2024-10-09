<?php
define("ROOTPATH", __DIR__ . DIRECTORY_SEPARATOR);
session_start();
require_once __DIR__ . "/App/Core/init.php";
error_reporting(E_ALL);

DEBUG ? ini_set('display_errors', 'on') : ini_set('display_errors', 'off');