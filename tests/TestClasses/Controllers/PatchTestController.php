<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers;

use Evelution87\RouteAttributes\Attributes\Patch;

class PatchTestController
{
    #[Patch('my-patch-method')]
    public function myPatchMethod()
    {
    }
}
