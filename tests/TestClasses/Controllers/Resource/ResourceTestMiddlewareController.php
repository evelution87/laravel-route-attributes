<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers\Resource;

use Evelution87\RouteAttributes\Attributes\Middleware;
use Evelution87\RouteAttributes\Attributes\Resource;
use Evelution87\RouteAttributes\Tests\TestClasses\Middleware\OtherTestMiddleware;
use Evelution87\RouteAttributes\Tests\TestClasses\Middleware\TestMiddleware;

#[Middleware([TestMiddleware::class, OtherTestMiddleware::class])]
#[Resource('posts', only: ['index', 'show'])]
class ResourceTestMiddlewareController
{
    public function index()
    {
    }

    public function show($id)
    {
    }
}
