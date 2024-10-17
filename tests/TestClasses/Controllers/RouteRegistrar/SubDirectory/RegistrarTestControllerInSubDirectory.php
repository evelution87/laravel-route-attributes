<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers\RouteRegistrar\SubDirectory;

use Evelution87\RouteAttributes\Attributes\Get;

class RegistrarTestControllerInSubDirectory
{
    #[Get('in-sub-directory')]
    public function myMethod()
    {
    }
}
