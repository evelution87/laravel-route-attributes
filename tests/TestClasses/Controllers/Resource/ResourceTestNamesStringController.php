<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers\Resource;

use Evelution87\RouteAttributes\Attributes\Resource;

#[Resource('posts', only: ['index', 'show'], names: 'api.v1.posts')]
class ResourceTestNamesStringController
{
    public function index()
    {
    }

    public function show($id)
    {
    }
}
