<?php
defined('ROOTPATH') OR exit('No direct script access allowed');
//==================================================
// Allgemeine Funktionssammlung
//
//==================================================

/**
* Anzeigen von Meldungen im Browser.
* @param mixed $input Allgemeine Eingabe
* @param bool $die Ob Programm abgebrochen werden soll    
**/
function dd(mixed $input, bool $die=true): void
{
    echo "<div style='border:2px solid red;background:rgba(233,34,34,.3);padding:.6rem;'><pre>";
    print_r($input);
    echo "</pre></div>";
    if($die)
    {
        die();
    }
}

function redirect(string $path):void 
{      
    header('Location: ' . DIRECTORY_SEPARATOR . $path);
    die();
}

function esc($str): string
{
    return htmlspecialchars($str, ENT_QUOTES,"");
}

function get_date($date)
{
    return date('jS M, Y', strtotime($date));
}

function snippets($path, $data=[]) {
    require_once $path;
}
