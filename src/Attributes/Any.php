<?php

namespace Evelution87\RouteAttributes\Attributes;

use Attribute;
use Illuminate\Routing\Router;

#[Attribute(Attribute::TARGET_METHOD)]
class Any extends Route
{
    public function __construct(
        string $uri,
        ?string $name = null,
        array | string $middleware = [],
        int $priority = 0,
    ) {
        parent::__construct(
            methods: Router::$verbs,
            uri: $uri,
            name: $name,
            middleware: $middleware,
        );
    }
}
