<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers\Resource;

use Evelution87\RouteAttributes\Attributes\Domain;
use Evelution87\RouteAttributes\Attributes\Resource;

#[Domain('my-subdomain.localhost')]
#[Resource('posts', only: ['index', 'show'])]
class ResourceTestDomainController
{
    public function index()
    {
    }

    public function show($id)
    {
    }
}
