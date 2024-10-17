<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers;

use Evelution87\RouteAttributes\Attributes\Put;

class PutMultipleTestController
{
    #[Put('my-put-method')]
    #[Put('my-other-put-method')]
    public function myPutMethod()
    {
    }
}
