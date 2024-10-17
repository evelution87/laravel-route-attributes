<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers;

use Evelution87\RouteAttributes\Attributes\Get;

class GetTestController
{
    #[Get('my-get-method')]
    public function myGetMethod()
    {
    }
}
