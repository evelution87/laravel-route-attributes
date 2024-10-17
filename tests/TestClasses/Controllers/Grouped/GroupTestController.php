<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers\Grouped;

use Evelution87\RouteAttributes\Attributes\Get;
use Evelution87\RouteAttributes\Attributes\Post;

class GroupTestController
{
    #[Get('my-get-method', middleware: ['test'])]
    public function myGetMethod()
    {
    }

    #[Post('my-post-method')]
    public function myPostMethod()
    {
    }
}
