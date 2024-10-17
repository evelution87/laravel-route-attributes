<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers;

use Evelution87\RouteAttributes\Attributes\Route;
use Evelution87\RouteAttributes\Attributes\ScopeBindings;

#[ScopeBindings(false)]
class BindingScoping3TestController
{
    #[Route('get', 'explicitly-disabled-by-class/{scoped}/{binding}')]
    public function explicitlyDisabledByClassScopedBinding()
    {
    }

    #[Route('get', 'explicitly-enabled-overriding-class/{scoped}/{binding}')]
    #[ScopeBindings(true)]
    public function explicitlyEnabledOverridingClassScopedBinding()
    {
    }
}
