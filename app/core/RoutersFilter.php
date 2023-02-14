<?php

namespace Mervy\PhpProOOP\core;

use Mervy\PhpProOOP\support\Uri;
use Mervy\PhpProOOP\routes\Routes;
use Mervy\PhpProOOP\support\RequestType;

class RoutersFilter
{

    public function __construct(
        private ?string $uri = null,
        private ?string $method = null,
        private ?array $routersRegistered = null,
    ) {
        $this->uri = Uri::get();
        $this->method = RequestType::get();
        $this->routersRegistered = Routes::get();
    }

    public function simpleRouter()
    {
        // Se existe /user (uri) no GET (method) 
        //https://youtu.be/VPO68M8cpsM?list=PLyugqHiq-SKdK8YjyV7x51IWZxpk9wVQN&t=789
        if (array_key_exists($this->uri, $this->routersRegistered[$this->method])) {
            return $this->routersRegistered[$this->method][$this->uri];
        }

        return 'NotFoundController::index';
    }
    public function dynamicRouter()
    {
    }
}
