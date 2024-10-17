<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers;

use Evelution87\RouteAttributes\Attributes\Route;
use Evelution87\RouteAttributes\Attributes\ScopeBindings;

class BindingScoping2TestController
{
    #[Route('get', 'explicitly-enabled/{scoped}/{binding}')]
    #[ScopeBindings]
    public function explicitlyEnabledScopedBinding()
    {
    }

    #[Route('get', 'explicitly-disabled/{scoped}/{binding}')]
    #[ScopeBindings(false)]
    public function explicitlyDisabledScopedBinding()
    {
    }

    #[Route('get', 'implicitly-disabled/{scoped}/{binding}')]
    public function implicitlyDisabledScopedBinding()
    {
    }
}
