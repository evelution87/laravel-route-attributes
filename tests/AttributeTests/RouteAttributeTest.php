<?php

namespace Evelution87\RouteAttributes\Tests\AttributeTests;

use Evelution87\RouteAttributes\RouteRegistrar;
use Evelution87\RouteAttributes\Tests\TestCase;
use Evelution87\RouteAttributes\Tests\TestClasses\Controllers\RouteAttribute\InvokableRouteGetTestController;
use Evelution87\RouteAttributes\Tests\TestClasses\Controllers\RouteAttribute\RouteGetTestController;
use Evelution87\RouteAttributes\Tests\TestClasses\Controllers\RouteAttribute\RouteMiddlewareTestController;
use Evelution87\RouteAttributes\Tests\TestClasses\Controllers\RouteAttribute\RouteMultiVerbTestController;
use Evelution87\RouteAttributes\Tests\TestClasses\Controllers\RouteAttribute\RouteNameTestController;
use Evelution87\RouteAttributes\Tests\TestClasses\Controllers\RouteAttribute\RoutePostTestController;
use Evelution87\RouteAttributes\Tests\TestClasses\Middleware\TestMiddleware;

class RouteAttributeTest extends TestCase
{
    protected RouteRegistrar $routeRegistrar;

    /** @test */
    public function the_route_annotation_can_register_a_get_route_()
    {
        $this->routeRegistrar->registerClass(RouteGetTestController::class);

        $this
            ->assertRegisteredRoutesCount(1)
            ->assertRouteRegistered(RouteGetTestController::class, 'myGetMethod', 'get', 'my-get-method');
    }

    /** @test */
    public function the_route_annotation_can_register_a_post_route()
    {
        $this->routeRegistrar->registerClass(RoutePostTestController::class);

        $this
            ->assertRegisteredRoutesCount(1)
            ->assertRouteRegistered(RoutePostTestController::class, 'myPostMethod', 'post', 'my-post-method');
    }

    /** @test */
    public function the_route_annotation_can_register_a_multi_verb_route()
    {
        $this->routeRegistrar->registerClass(RouteMultiVerbTestController::class);

        $this
            ->assertRegisteredRoutesCount(1)
            ->assertRouteRegistered(
                RouteMultiVerbTestController::class,
                'myMultiVerbMethod',
                ['get','post', 'delete'],
                'my-multi-verb-method'
            );
    }

    /** @test */
    public function it_can_add_middleware_to_a_method()
    {
        $this->routeRegistrar->registerClass(RouteMiddlewareTestController::class);

        $this->assertRouteRegistered(
            controller: RouteMiddlewareTestController::class,
            middleware: TestMiddleware::class,
        );
    }

    /** @test */
    public function it_can_add_a_route_name_to_a_method()
    {
        $this->routeRegistrar->registerClass(RouteNameTestController::class);

        $this->assertRouteRegistered(
            controller: RouteNameTestController::class,
            name: 'test-name',
        );
    }

    /** @test */
    public function it_can_add_a_route_for_an_invokable()
    {
        $this->routeRegistrar->registerClass(InvokableRouteGetTestController::class);

        $this
            ->assertRegisteredRoutesCount(1)
            ->assertRouteRegistered(
                controller: InvokableRouteGetTestController::class,
                controllerMethod: InvokableRouteGetTestController::class,
                uri: 'my-invokable-route'
            );
    }
}
