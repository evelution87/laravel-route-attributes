<?php

namespace Evelution87\RouteAttributes\Tests;

use Evelution87\RouteAttributes\RouteAttributesServiceProvider;
use Evelution87\RouteAttributes\RouteRegistrar;
use Evelution87\RouteAttributes\Tests\TestClasses\Controllers\Grouped\GroupTestController;

class ServiceProviderTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->routeRegistrar = app(RouteRegistrar::class);
    }

    protected function getPackageProviders($app)
    {
        return [
            RouteAttributesServiceProvider::class,
        ];
    }

    /**
     * Resolve application core configuration implementation.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return void
     */
    protected function resolveApplicationConfiguration($app)
    {
        parent::resolveApplicationConfiguration($app);

        $app['config']->set('route-attributes.middleware', ['SomeMiddleware']);
        $app['config']->set('route-attributes.directories', [
            __DIR__ . '/TestClasses/Controllers/Grouped' => [
                'prefix' => 'grouped',
                'middleware' => 'api',
                'namespace' => 'Evelution87\RouteAttributes\Tests\TestClasses\Controllers\Grouped',
            ],
        ]);
    }

    /** @test */
    public function the_provider_can_register_group_of_directories()
    {
        $this->assertRegisteredRoutesCount(2);

        $this->assertRouteRegistered(
            GroupTestController::class,
            controllerMethod: 'myGetMethod',
            uri: 'grouped/my-get-method',
            middleware: ['SomeMiddleware', 'api', 'test']
        );

        $this->assertRouteRegistered(
            GroupTestController::class,
            controllerMethod: 'myPostMethod',
            httpMethods: 'post',
            uri: 'grouped/my-post-method',
            middleware: ['SomeMiddleware', 'api']
        );
    }
}
