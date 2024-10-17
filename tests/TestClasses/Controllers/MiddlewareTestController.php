<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers;

use Evelution87\RouteAttributes\Attributes\Middleware;
use Evelution87\RouteAttributes\Attributes\Route;
use Evelution87\RouteAttributes\Tests\TestClasses\Middleware\OtherTestMiddleware;
use Evelution87\RouteAttributes\Tests\TestClasses\Middleware\TestMiddleware;

#[Middleware(TestMiddleware::class)]
class MiddlewareTestController
{
    #[Route('get', 'single-middleware')]
    public function singleMiddleware()
    {
    }

    #[Route('get', 'multiple-middleware', middleware: OtherTestMiddleware::class)]
    public function multipleMiddleware()
    {
    }
}
