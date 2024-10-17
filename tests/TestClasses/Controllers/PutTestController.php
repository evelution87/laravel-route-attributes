<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers;

use Evelution87\RouteAttributes\Attributes\Put;

class PutTestController
{
    #[Put('my-put-method')]
    public function myPutMethod()
    {
    }
}
