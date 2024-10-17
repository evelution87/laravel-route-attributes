<?php

namespace Evelution87\RouteAttributes\Tests\AttributeTests;

use Evelution87\RouteAttributes\Tests\TestCase;
use Evelution87\RouteAttributes\Tests\TestClasses\Controllers\OptionsMultipleTestController;
use Evelution87\RouteAttributes\Tests\TestClasses\Controllers\OptionsTestController;

class OptionsAttributeTest extends TestCase
{
    /** @test */
    public function it_can_register_a_options_route()
    {
        $this->routeRegistrar->registerClass(OptionsTestController::class);

        $this
            ->assertRegisteredRoutesCount(1)
            ->assertRouteRegistered(OptionsTestController::class, 'myOptionsMethod', 'options', 'my-options-method');
    }

    /** @test */
    public function it_can_register_multiple_options_routes()
    {
        $this->routeRegistrar->registerClass(OptionsMultipleTestController::class);

        $this
            ->assertRegisteredRoutesCount(2)
            ->assertRouteRegistered(OptionsMultipleTestController::class, 'myOptionsMethod', 'options', 'my-options-method')
            ->assertRouteRegistered(OptionsMultipleTestController::class, 'myOptionsMethod', 'options', 'my-other-options-method');
    }
}
