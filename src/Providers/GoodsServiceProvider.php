<?php

namespace Kxk911\CsumGoods\Providers;

use Illuminate\Support\ServiceProvider;
use Kxk911\CsumGoods\Console\Commands\GoodsCommand;

class GoodsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
 
            $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

            $this->publishes([
                __DIR__ . '/../../config/csumgoods.php' => config_path('csumgoods.php'),
            ]);

            $this->commands([
                GoodsCommand::class,
            ]);
        }

        $this->loadRoutesFrom(__DIR__ . '/../../routes/api.php');
    }
}