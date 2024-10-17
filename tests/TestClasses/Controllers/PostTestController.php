<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers;

use Evelution87\RouteAttributes\Attributes\Post;

class PostTestController
{
    #[Post('my-post-method')]
    public function myPostMethod()
    {
    }
}
