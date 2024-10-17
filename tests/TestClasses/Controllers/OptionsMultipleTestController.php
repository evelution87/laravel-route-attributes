<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers;

use Evelution87\RouteAttributes\Attributes\Options;

class OptionsMultipleTestController
{
    #[Options('my-options-method')]
    #[Options('my-other-options-method')]
    public function myOptionsMethod()
    {
    }
}
