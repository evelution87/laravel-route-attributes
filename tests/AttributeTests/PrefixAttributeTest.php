<?php

namespace Evelution87\RouteAttributes\Tests\AttributeTests;

use Evelution87\RouteAttributes\Tests\TestCase;
use Evelution87\RouteAttributes\Tests\TestClasses\Controllers\PrefixTestController;

class PrefixAttributeTest extends TestCase
{
    /** @test */
    public function it_can_apply_a_prefix_on_the_url_of_every_method()
    {
        $this->routeRegistrar->registerClass(PrefixTestController::class);

        $this
            ->assertRegisteredRoutesCount(3)
            ->assertRouteRegistered(
                PrefixTestController::class,
                controllerMethod: 'myRootGetMethod',
                uri: 'my-prefix',
            )
            ->assertRouteRegistered(
                PrefixTestController::class,
                controllerMethod: 'myGetMethod',
                uri: 'my-prefix/my-get-method',
            )
            ->assertRouteRegistered(
                PrefixTestController::class,
                controllerMethod: 'myPostMethod',
                httpMethods: 'post',
                uri: 'my-prefix/my-post-method',
            );
    }
}
