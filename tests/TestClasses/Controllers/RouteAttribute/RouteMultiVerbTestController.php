<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers\RouteAttribute;

use Evelution87\RouteAttributes\Attributes\Route;

class RouteMultiVerbTestController
{
    #[Route(['get', 'post', 'delete'], 'my-multi-verb-method')]
    public function myMultiVerbMethod()
    {
    }
}
