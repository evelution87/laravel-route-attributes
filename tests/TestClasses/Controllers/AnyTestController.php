<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers;

use Evelution87\RouteAttributes\Attributes\Any;

class AnyTestController
{
    #[Any('my-any-method')]
    public function myAnyMethod()
    {
    }
}
