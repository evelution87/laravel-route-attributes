<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers\Resource;

use Illuminate\Http\Request;
use Evelution87\RouteAttributes\Attributes\Resource;

#[Resource('users.posts', shallow: true)]
class ResourceTestShallowController
{
    public function index($userId)
    {
    }

    public function create($userId)
    {
    }

    public function store(Request $request, $userId)
    {
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
