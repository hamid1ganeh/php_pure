<?php

use Dotenv\Dotenv;


if (!function_exists('view')) {
    function view($viewName, ?array $parameters = [])
    {
     extract($parameters);
     require __DIR__.'/../resources/views/' . str_replace('.','/',$viewName ). '.view.php';
    }
}

if(!function_exists('env')){
    function env($variable)
    {
        $dotenv =Dotenv::createImmutable(__DIR__.'/../');
        $dotenv->load();
        return $_ENV[$variable];
    }
}