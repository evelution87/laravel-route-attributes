<?php

namespace Evelution87\RouteAttributes\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD | Attribute::IS_REPEATABLE)]
class Options extends Route
{
    public function __construct(
        string $uri,
        ?string $name = null,
        array | string $middleware = [],
        int $priority = 0,
    ) {
        parent::__construct(
            methods: ['options'],
            uri: $uri,
            name: $name,
            middleware: $middleware,
        );
    }
}
