<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers;

use Evelution87\RouteAttributes\Attributes\Fallback;
use Evelution87\RouteAttributes\Attributes\Get;

class FallbackTestController
{
    #[Get('my-fallback-method')]
    #[Fallback]
    public function myFallbackMethod()
    {
    }
}
