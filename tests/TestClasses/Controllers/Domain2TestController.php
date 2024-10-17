<?php

declare(strict_types=1);

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers;

use Evelution87\RouteAttributes\Attributes\DomainFromConfig;
use Evelution87\RouteAttributes\Attributes\Get;

#[DomainFromConfig('domains.test2')]
class Domain2TestController
{
    #[Get('my-get-method')]
    public function myGetMethod()
    {
    }
}
