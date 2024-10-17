<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers;

use Evelution87\RouteAttributes\Attributes\Get;
use Evelution87\RouteAttributes\Attributes\Post;
use Evelution87\RouteAttributes\Attributes\Prefix;

#[Prefix('my-prefix')]
class PrefixTestController
{
    #[Get('/')]
    public function myRootGetMethod()
    {
    }

    #[Get('my-get-method')]
    public function myGetMethod()
    {
    }

    #[Post('my-post-method')]
    public function myPostMethod()
    {
    }
}
