<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers\RouteRegistrar;

use Evelution87\RouteAttributes\Attributes\Get;

class RegistrarTestSecondController
{
    #[Get('second-method')]
    public function myMethod()
    {
    }
}
