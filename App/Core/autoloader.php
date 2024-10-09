<?php

defined('ROOTPATH') OR exit('No direct script access allowed');
/**
 * Ladet automatisch die Klassen
 * @param string $class Name der Klasse
 * 
 */
function autoloader(string $class): void {  

    $path = str_replace(PREFIX, '', $class);
    $path = str_replace('\\','/', $path . '.php');
   
    if (file_exists($path))
    {
        require $path;
    }
}
spl_autoload_register('autoloader');