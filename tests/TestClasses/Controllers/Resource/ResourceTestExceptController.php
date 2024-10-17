<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers\Resource;

use Illuminate\Http\Request;
use Evelution87\RouteAttributes\Attributes\Resource;

#[Resource('posts', except: ['update', 'destroy'])]
class ResourceTestExceptController
{
    public function index()
    {
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    }
}
