<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers;

use Evelution87\RouteAttributes\Attributes\Get;
use Evelution87\RouteAttributes\Attributes\Post;
use Evelution87\RouteAttributes\Attributes\Where;
use Evelution87\RouteAttributes\Attributes\WhereAlpha;
use Evelution87\RouteAttributes\Attributes\WhereAlphaNumeric;
use Evelution87\RouteAttributes\Attributes\WhereIn;
use Evelution87\RouteAttributes\Attributes\WhereNumber;
use Evelution87\RouteAttributes\Attributes\WhereUlid;
use Evelution87\RouteAttributes\Attributes\WhereUuid;

#[Where('param', '[0-9]+')]
class WhereTestController
{
    #[Get('my-get-method/{param}')]
    public function myGetMethod()
    {
    }

    #[Post('my-post-method/{param}/{param2}')]
    #[Where('param2', '[a-zA-Z]+')]
    public function myPostMethod()
    {
    }

    #[Get('my-where-method/{param}/{param2}/{param3}')]
    #[Where('param2', '[a-zA-Z]+')]
    #[Where('param3', 'test')]
    public function myWhereMethod()
    {
    }

    #[Get('my-shorthands')]
    #[WhereAlpha('alpha')]
    #[WhereAlphaNumeric('alpha-numeric')]
    #[WhereIn('in', ['value1', 'value2'])]
    #[WhereNumber('number')]
    #[WhereUlid('ulid')]
    #[WhereUuid('uuid')]
    public function myShorthands()
    {
    }
}
