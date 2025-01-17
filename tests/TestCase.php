<?php

namespace Tests;

use Statamic\Providers\PackageServiceProvider;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            PackageServiceProvider::class,
        ];
    }
}
