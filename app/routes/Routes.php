<?php

namespace Mervy\PhpProOOP\routes;

class Routes
{
    public static function get()
    {
        return [
            'GET' => [
                '/' => 'HomeController::index',
                '/user/[0-9]+' => 'UserController::show',
                '/register' => 'RegisterController::store'
            ],
            'POST' => [
                '/' => 'AdminController::index'
            ]
        ];
    }
}
