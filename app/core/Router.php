<?php

namespace Mervy\PhpProOOP\core;

class Router
{
    public static function run()
    {
        $routerRegistered = new RoutersFilter;
        $router = $routerRegistered->get();

        var_dump($router);
    }
}
