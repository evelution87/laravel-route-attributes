<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers;

use Evelution87\RouteAttributes\Attributes\Options;

class OptionsTestController
{
    #[Options('my-options-method')]
    public function myOptionsMethod()
    {
    }
}
