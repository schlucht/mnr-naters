<?php

namespace OTS\App\Core;

use PDO;
use Exception;

defined('ROOTPATH') OR exit('No direct script access allowed');

Trait Database
{
    public PDO $pdo;

    protected function connect()
    {
        try
        {
            return new PDO("mysql:host={HOST};dbname={DBNAME}", DBUSER, DBPW,
                        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        }
        catch (Exception $e)
        {
            die($e);
        }
    }
}
