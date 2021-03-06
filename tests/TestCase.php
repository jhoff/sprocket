<?php

namespace PeterDKC\Sprocket\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use PeterDKC\Sprocket\Providers\SprocketServiceProvider;

class TestCase extends BaseTestCase
{
    /**
     * Get the package Service Providers.
     *
     * @param  \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            SprocketServiceProvider::class,
        ];
    }
}
