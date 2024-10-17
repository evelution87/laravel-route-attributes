<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers;

use Evelution87\RouteAttributes\Attributes\Defaults;
use Evelution87\RouteAttributes\Attributes\Get;
use Evelution87\RouteAttributes\Attributes\Post;

#[Defaults('param', 'controller-default')]
class DefaultsTestController
{
    #[Get('my-get-method/{param?}')]
    public function myGetMethod()
    {
    }

    #[Post('my-post-method/{param?}/{param2?}')]
    #[Defaults('param2', 'method-default')]
    public function myPostMethod()
    {
    }

    #[Get('my-default-method/{param?}/{param2?}/{param3?}')]
    #[Defaults('param2', 'method-default-first')]
    #[Defaults('param3', 'method-default-second')]
    public function myDefaultMethod()
    {
    }

    #[Get('my-override-method/{param?}')]
    #[Defaults('param', 'method-default')]
    public function myOverrideMethod()
    {
    }
}
