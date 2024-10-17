<?php

namespace Evelution87\RouteAttributes\Tests\AttributeTests;

use Evelution87\RouteAttributes\Tests\TestCase;
use Evelution87\RouteAttributes\Tests\TestClasses\Controllers\GetMultipleTestController;
use Evelution87\RouteAttributes\Tests\TestClasses\Controllers\GetTestController;

class GetAttributeTest extends TestCase
{
    /** @test */
    public function it_can_register_a_get_route()
    {
        $this->routeRegistrar->registerClass(GetTestController::class);

        $this
            ->assertRegisteredRoutesCount(1)
            ->assertRouteRegistered(GetTestController::class, 'myGetMethod', 'get', 'my-get-method');
    }

    /** @test */
    public function it_can_register_multiple_get_routes()
    {
        $this->routeRegistrar->registerClass(GetMultipleTestController::class);

        $this
            ->assertRegisteredRoutesCount(2)
            ->assertRouteRegistered(GetMultipleTestController::class, 'myGetMethod', 'get', 'my-get-method')
            ->assertRouteRegistered(GetMultipleTestController::class, 'myGetMethod', 'get', 'my-other-get-method');
        ;
    }
}
