<?php

namespace Evelution87\RouteAttributes\Tests\AttributeTests;

use Evelution87\RouteAttributes\Tests\TestCase;
use Evelution87\RouteAttributes\Tests\TestClasses\Controllers\BindingScoping1TestController;
use Evelution87\RouteAttributes\Tests\TestClasses\Controllers\BindingScoping2TestController;
use Evelution87\RouteAttributes\Tests\TestClasses\Controllers\BindingScoping3TestController;
use Evelution87\RouteAttributes\Tests\TestClasses\Controllers\BindingScoping4TestController;

class ScopeBindingsAttributeTest extends TestCase
{
    /** @test */
    public function it_can_enable_binding_scoping_on_each_method_of_a_controller()
    {
        $this->routeRegistrar->registerClass(BindingScoping2TestController::class);

        $this
            ->assertRegisteredRoutesCount(3)
            ->assertRouteRegistered(
                BindingScoping2TestController::class,
                controllerMethod: 'explicitlyEnabledScopedBinding',
                uri: 'explicitly-enabled/{scoped}/{binding}',
                enforcesScopedBindings: true,
                preventsScopedBindings: false
            )
            ->assertRouteRegistered(
                BindingScoping2TestController::class,
                controllerMethod: 'explicitlyDisabledScopedBinding',
                uri: 'explicitly-disabled/{scoped}/{binding}',
                enforcesScopedBindings: false,
                preventsScopedBindings: true
            )
            ->assertRouteRegistered(
                BindingScoping2TestController::class,
                controllerMethod: 'implicitlyDisabledScopedBinding',
                uri: 'implicitly-disabled/{scoped}/{binding}',
                enforcesScopedBindings: false,
                preventsScopedBindings: false
            );
    }

    /** @test */
    public function it_can_disable_binding_scoping_on_individual_methods_of_a_controller()
    {
        $this->routeRegistrar->registerClass(BindingScoping1TestController::class);

        $this
            ->assertRegisteredRoutesCount(2)
            ->assertRouteRegistered(
                BindingScoping1TestController::class,
                controllerMethod: 'implicitlyEnabledScopedBinding',
                uri: 'implicit/{scoped}/{binding}',
                enforcesScopedBindings: true,
                preventsScopedBindings: false
            )
            ->assertRouteRegistered(
                BindingScoping1TestController::class,
                controllerMethod: 'explicitlyDisabledScopedBinding',
                uri: 'explicitly-disabled/{scoped}/{binding}',
                enforcesScopedBindings: false,
                preventsScopedBindings: true
            );
    }

    /** @test */
    public function it_can_enable_binding_scoping_on_individual_methods_of_a_controller()
    {
        $this->routeRegistrar->registerClass(BindingScoping3TestController::class);

        $this
            ->assertRegisteredRoutesCount(2)
            ->assertRouteRegistered(
                BindingScoping3TestController::class,
                controllerMethod: 'explicitlyDisabledByClassScopedBinding',
                uri: 'explicitly-disabled-by-class/{scoped}/{binding}',
                enforcesScopedBindings: false,
                preventsScopedBindings: true
            )
            ->assertRouteRegistered(
                BindingScoping3TestController::class,
                controllerMethod: 'explicitlyEnabledOverridingClassScopedBinding',
                uri: 'explicitly-enabled-overriding-class/{scoped}/{binding}',
                enforcesScopedBindings: true,
                preventsScopedBindings: false
            );
    }

    /** @test */
    public function the_registrar_respects_default_scope_bindings_setting_from_config()
    {
        config()->set('route-attributes.scope-bindings', true);

        $this->routeRegistrar->registerClass(BindingScoping4TestController::class);

        $this
            ->assertRegisteredRoutesCount(2)
            ->assertRouteRegistered(
                BindingScoping4TestController::class,
                controllerMethod: 'index',
                uri: 'default-scoping',
                enforcesScopedBindings: true,
                preventsScopedBindings: false
            )
            ->assertRouteRegistered(
                BindingScoping4TestController::class,
                controllerMethod: 'store',
                httpMethods: 'post',
                uri: 'explicitly-disabled-scoping',
                enforcesScopedBindings: false,
                preventsScopedBindings: true
            );
    }
}
