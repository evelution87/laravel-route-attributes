<?php

namespace Spatie\RouteAttributes\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD | Attribute::IS_REPEATABLE)]
class Post extends Route
{
    public function __construct(
        string $uri,
        ?string $name = null,
        array | string $middleware = [],
        int $priority = 0,
    ) {
        parent::__construct(
            methods: ['post'],
            uri: $uri,
            name: $name,
            middleware: $middleware,
        );
    }
}
