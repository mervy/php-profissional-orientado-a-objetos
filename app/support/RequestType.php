<?php

namespace Mervy\PhpProOOP\support;

class RequestType
{
    public static function get()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}
