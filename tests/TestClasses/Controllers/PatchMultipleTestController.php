<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers;

use Evelution87\RouteAttributes\Attributes\Patch;

class PatchMultipleTestController
{
    #[Patch('my-patch-method')]
    #[Patch('my-other-patch-method')]
    public function myPatchMethod()
    {
    }
}
