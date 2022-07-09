<?php

namespace Kxk911\CsumGoods\Test;

use Orchestra\Testbench\TestCase;

class FeatureTestCase extends TestCase
{

    public function setUp(): void
    {
        parent::setUp();
        $this->setUpDatabase();
    }

    protected function getPackageProviders($app)
    {
        return [
            'Kxk911\CsumGoods\Providers\GoodsServiceProvider',
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'sqlite');
        $app['config']->set('database.connections.sqlite', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);
    }

    protected function setUpDatabase()
    {
        // $this->loadMigrationsFrom(__DIR__ . '/../database/migrations/0000_00_00_000000_create_goods_table');
        $this->artisan('migrate')->run();
    }
}