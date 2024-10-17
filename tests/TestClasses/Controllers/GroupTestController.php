<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers;

use Evelution87\RouteAttributes\Attributes\Get;
use Evelution87\RouteAttributes\Attributes\Group;
use Evelution87\RouteAttributes\Attributes\Post;

#[Group(domain: 'my-subdomain.localhost', prefix: 'my-prefix')]
#[Group(domain: 'my-second-subdomain.localhost', prefix: 'my-second-prefix')]
class GroupTestController
{
    #[Get('my-get-method')]
    public function myGetMethod()
    {
    }

    #[Post('my-post-method')]
    public function myPostMethod()
    {
    }
}
