<?php

namespace Evelution87\RouteAttributes\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
class ApiResource extends Resource
{
    public function __construct(
        public string $resource,
        public array | string | null $except = null,
        public array | string | null $only = null,
        public array | string | null $names = null,
        public array | string | null $parameters = null,
        public bool | null $shallow = null,
        int $priority = 0,
    ) {
        parent::__construct(
            resource: $resource,
            apiResource: true,
            except: $except,
            only: $only,
            names: $names,
            parameters: $parameters,
            shallow: $shallow,
        );
    }
}
