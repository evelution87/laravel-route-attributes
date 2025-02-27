<?php

declare(strict_types=1);

namespace Evelution87\RouteAttributes\Tests\AttributeTests;

use Evelution87\RouteAttributes\Tests\TestCase;
use Evelution87\RouteAttributes\Tests\TestClasses\Controllers\Domain1TestController;
use Evelution87\RouteAttributes\Tests\TestClasses\Controllers\Domain2TestController;

class Domain1AttributeTest extends TestCase
{
    /** @test */
    public function it_registers_the_same_url_on_different_domains()
    {
        config()->set('domains.test', 'config.localhost');
        config()->set('domains.test2', 'config2.localhost');
        $this->routeRegistrar->registerClass(Domain1TestController::class);
        $this->routeRegistrar->registerClass(Domain2TestController::class);

        $this
            ->assertRegisteredRoutesCount(2)
            ->assertRouteRegistered(
                Domain1TestController::class,
                controllerMethod: 'myGetMethod',
                uri: 'my-get-method',
                domain: 'config.localhost'
            )
            ->assertRouteRegistered(
                Domain2TestController::class,
                controllerMethod: 'myGetMethod',
                uri: 'my-get-method',
                domain: 'config2.localhost'
            );
    }
}
