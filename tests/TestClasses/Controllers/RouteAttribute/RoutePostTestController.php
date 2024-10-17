<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers\RouteAttribute;

use Evelution87\RouteAttributes\Attributes\Route;

class RoutePostTestController
{
    #[Route('post', 'my-post-method')]
    public function myPostMethod()
    {
    }
}
