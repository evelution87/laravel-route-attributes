<?php

declare(strict_types=1);

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers;

use Evelution87\RouteAttributes\Attributes\Get;
use Evelution87\RouteAttributes\Attributes\Post;
use Evelution87\RouteAttributes\Attributes\ScopeBindings;

final class BindingScoping4TestController
{
    #[Get('default-scoping')]
    public function index()
    {

    }

    #[ScopeBindings(false)]
    #[Post('explicitly-disabled-scoping')]
    public function store()
    {

    }
}
