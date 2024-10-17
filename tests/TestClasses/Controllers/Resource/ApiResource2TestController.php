<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers\Resource;

use Illuminate\Http\Request;
use Evelution87\RouteAttributes\Attributes\ApiResource;

#[ApiResource('posts')]
class ApiResource2TestController
{
    public function index()
    {
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
