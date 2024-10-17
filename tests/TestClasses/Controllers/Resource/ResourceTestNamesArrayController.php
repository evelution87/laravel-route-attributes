<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers\Resource;

use Evelution87\RouteAttributes\Attributes\Resource;

#[Resource('posts', only: ['index', 'show'], names: ['index' => 'posts.list', 'show' => 'posts.view'])]
class ResourceTestNamesArrayController
{
    public function index()
    {
    }

    public function show($id)
    {
    }
}
