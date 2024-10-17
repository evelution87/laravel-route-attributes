<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers\RouteAttribute;

use Evelution87\RouteAttributes\Attributes\Route;
use Evelution87\RouteAttributes\Tests\TestClasses\Middleware\TestMiddleware;

class RouteMiddlewareTestController
{
    #[Route('get', 'my-method', middleware: TestMiddleware::class)]
    public function myMethod()
    {
    }
}
