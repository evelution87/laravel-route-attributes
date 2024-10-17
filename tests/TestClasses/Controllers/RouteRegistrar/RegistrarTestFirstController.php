<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers\RouteRegistrar;

use Evelution87\RouteAttributes\Attributes\Get;

class RegistrarTestFirstController
{
    #[Get('first-method')]
    public function myMethod()
    {
    }
}
