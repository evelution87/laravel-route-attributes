<?php

namespace Evelution87\RouteAttributes\Tests\AttributeTests;

use Evelution87\RouteAttributes\Tests\TestCase;
use Evelution87\RouteAttributes\Tests\TestClasses\Controllers\DomainFromConfigTestController;

class DomainFromConfigAttributeTest extends TestCase
{
    /** @test */
    public function it_can_apply_a_domain_on_the_url_of_every_method()
    {
        config()->set('domains.test', 'config.localhost');
        $this->routeRegistrar->registerClass(DomainFromConfigTestController::class);

        $this
            ->assertRegisteredRoutesCount(2)
            ->assertRouteRegistered(
                DomainFromConfigTestController::class,
                controllerMethod: 'myGetMethod',
                uri: 'my-get-method',
                domain: 'config.localhost'
            )
            ->assertRouteRegistered(
                DomainFromConfigTestController::class,
                controllerMethod: 'myPostMethod',
                httpMethods: 'post',
                uri: 'my-post-method',
                domain: 'config.localhost'
            );
    }
}
