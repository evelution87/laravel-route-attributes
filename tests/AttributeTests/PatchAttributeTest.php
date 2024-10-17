<?php

namespace Evelution87\RouteAttributes\Tests\AttributeTests;

use Evelution87\RouteAttributes\Tests\TestCase;
use Evelution87\RouteAttributes\Tests\TestClasses\Controllers\PatchMultipleTestController;
use Evelution87\RouteAttributes\Tests\TestClasses\Controllers\PatchTestController;

class PatchAttributeTest extends TestCase
{
    /** @test */
    public function it_can_register_a_patch_route()
    {
        $this->routeRegistrar->registerClass(PatchTestController::class);

        $this
            ->assertRegisteredRoutesCount(1)
            ->assertRouteRegistered(PatchTestController::class, 'myPatchMethod', 'patch', 'my-patch-method');
    }

    /** @test */
    public function it_can_register_multiple_patch_routes()
    {
        $this->routeRegistrar->registerClass(PatchMultipleTestController::class);

        $this
            ->assertRegisteredRoutesCount(2)
            ->assertRouteRegistered(PatchMultipleTestController::class, 'myPatchMethod', 'patch', 'my-patch-method')
            ->assertRouteRegistered(PatchMultipleTestController::class, 'myPatchMethod', 'patch', 'my-other-patch-method');
    }
}
