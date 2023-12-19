<?php

namespace Core\Database;

use PDO;
use PDOException;

class DB
{
    public static function initialize( )
    {
        try 
        {
            return new PDO(
                'mysql:host='.env('DB_HOST').';dbname='.env('DB_DATABASE'),
                env('DB_USERNAME'),
                env('DB_PASSWORD')
            );
        } 
        catch (PDOException $exception) 
        {
            die("Could not connect to the database: $exception");
        }
    }
}