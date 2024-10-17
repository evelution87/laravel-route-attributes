<?php

namespace Evelution87\RouteAttributes\Tests\TestClasses\Controllers;

use Evelution87\RouteAttributes\Attributes\Get;
use Evelution87\RouteAttributes\Attributes\WithTrashed;

#[WithTrashed]
class WithTrashedTestController
{
    #[Get('with-trashed-test-method/{param}')]
    #[WithTrashed]
    public function withTrashedRoute()
    {
    }

    #[Get('with-trashed-test-method-2/{param}')]
    #[WithTrashed(false)]
    public function withoutTrashedRoute()
    {
    }

    #[Get('with-trashed-test-method-3/{param}')]
    public function noWithTrashedAttributeRoute()
    {
    }
}
