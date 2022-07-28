<?php

namespace Jdanielewicz\Calculator\Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Tests\CreatesApplication;

abstract class TestCase extends BaseTestCase
{
//    use RefreshDatabase;
    use CreatesApplication;
}
