<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers;

use Evelution87\RouteAttributes\Attributes\Delete;

class DeleteTestController
{
    #[Delete('my-delete-method')]
    public function myDeleteMethod()
    {
    }
}
