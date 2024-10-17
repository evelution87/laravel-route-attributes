<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers\Resource;

use Evelution87\RouteAttributes\Attributes\Prefix;
use Evelution87\RouteAttributes\Attributes\Resource;

#[Prefix('/api/v1/my-prefix/etc')]
#[Resource('posts', only: ['index', 'show'])]
class ResourceTestPrefixController
{
    public function index()
    {
    }

    public function show($id)
    {
    }
}
