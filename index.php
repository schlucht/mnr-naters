<?php
define("ROOTPATH", __DIR__ . DIRECTORY_SEPARATOR);
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 'on');
require_once __DIR__ . "/App/Core/init.php";
echo "Hello";