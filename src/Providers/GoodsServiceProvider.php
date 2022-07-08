<?php

namespace kxk911\csum\goods\Providers;

use Illuminate\Support\ServiceProvider;
use kxk911\csum\goods\Console\Commands\GoodsCommand;

class GoodsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

            $this->publishes([
                __DIR__ . '/../../config/csum-goods.php' => config_path('csum-goods.php'),
            ]);

            $this->commands([
                GoodsCommand::class,
            ]);
        }

        $this->loadRoutesFrom(__DIR__ . '/../../routes/api.php');
    }
}