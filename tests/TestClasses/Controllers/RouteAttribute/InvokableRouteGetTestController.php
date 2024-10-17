<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers\RouteAttribute;

use Evelution87\RouteAttributes\Attributes\Route;

class InvokableRouteGetTestController
{
    #[Route('get', 'my-invokable-route')]
    public function __invoke()
    {
    }
}
