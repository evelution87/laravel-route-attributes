<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers\RouteAttribute;

use Evelution87\RouteAttributes\Attributes\Route;

class RouteGetTestController
{
    #[Route('get', 'my-get-method')]
    public function myGetMethod()
    {
    }
}
