<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers;

use Evelution87\RouteAttributes\Attributes\Domain;
use Evelution87\RouteAttributes\Attributes\Get;
use Evelution87\RouteAttributes\Attributes\Post;

#[Domain('my-subdomain.localhost')]
class DomainTestController
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
