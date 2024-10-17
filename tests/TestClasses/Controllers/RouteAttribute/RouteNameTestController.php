<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers\RouteAttribute;

use Evelution87\RouteAttributes\Attributes\Route;

class RouteNameTestController
{
    #[Route('get', 'my-method', name: 'test-name')]
    public function myMethod()
    {
    }
}
