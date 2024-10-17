<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers;

use Evelution87\RouteAttributes\Attributes\Get;

class GetMultipleTestController
{
    #[Get('my-get-method')]
    #[Get('my-other-get-method')]
    public function myGetMethod()
    {
    }
}
