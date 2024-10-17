<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers;

use Evelution87\RouteAttributes\Attributes\Post;

class PostMultipleTestController
{
    #[Post('my-post-method')]
    #[Post('my-other-post-method')]
    public function myPostMethod()
    {
    }
}
