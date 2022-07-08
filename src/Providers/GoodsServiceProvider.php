<?php

namespace kxk911\csum\goods\Providers;

use Illuminate\Support\ServiceProvider;
use kxk911\csum\goods\Console\Commands\ExampleCommand;

class LaravelExampleServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

            $this->publishes([
                __DIR__ . '/../../config/goods.php' => config_path('goods.php'),
            ]);

            $this->commands([
                ExampleCommand::class,
            ]);
        }

        $this->loadRoutesFrom(__DIR__ . '/../../routes/api.php');
    }
}