<?php

namespace Evelution87\RouteAttributes\Tests\AttributeTests;

use Evelution87\RouteAttributes\Tests\TestCase;
use Evelution87\RouteAttributes\Tests\TestClasses\Controllers\PostMultipleTestController;
use Evelution87\RouteAttributes\Tests\TestClasses\Controllers\PostTestController;

class PostAttributeTest extends TestCase
{
    /** @test */
    public function it_can_register_a_post_route()
    {
        $this->routeRegistrar->registerClass(PostTestController::class);

        $this
            ->assertRegisteredRoutesCount(1)
            ->assertRouteRegistered(PostTestController::class, 'myPostMethod', 'post', 'my-post-method');
    }

    /** @test */
    public function it_can_register_multiple_post_routes()
    {
        $this->routeRegistrar->registerClass(PostMultipleTestController::class);

        $this
            ->assertRegisteredRoutesCount(2)
            ->assertRouteRegistered(PostMultipleTestController::class, 'myPostMethod', 'post', 'my-post-method')
            ->assertRouteRegistered(PostMultipleTestController::class, 'myPostMethod', 'post', 'my-other-post-method');
    }
}
