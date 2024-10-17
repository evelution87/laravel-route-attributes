<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers;

use Evelution87\RouteAttributes\Attributes\Route;
use Evelution87\RouteAttributes\Attributes\ScopeBindings;

#[ScopeBindings]
class BindingScoping1TestController
{
    #[Route('get', 'implicit/{scoped}/{binding}')]
    public function implicitlyEnabledScopedBinding()
    {
    }

    #[Route('get', 'explicitly-disabled/{scoped}/{binding}')]
    #[ScopeBindings(false)]
    public function explicitlyDisabledScopedBinding()
    {
    }
}
