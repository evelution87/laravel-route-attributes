<?php

namespace Evelution87\RouteAttributes\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
class Prefix implements RouteAttribute
{
    public function __construct(
        public string $prefix
    ) {
    }
}
