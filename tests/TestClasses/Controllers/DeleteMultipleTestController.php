<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers;

use Evelution87\RouteAttributes\Attributes\Delete;

class DeleteMultipleTestController
{
    #[Delete('my-delete-method')]
    #[Delete('my-other-delete-method')]
    public function myDeleteMethod()
    {
    }
}
