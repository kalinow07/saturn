<?php

namespace Kalinow\Saturn;

use Illuminate\Support\ServiceProvider;

class SaturnPackageProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'saturn');
        $this->publishes([
            __DIR__ . '/views' => base_path('resources/views/kalinow/saturn/views'),
            __DIR__ . '/js' => base_path('public/js'),
            __DIR__ . '/config/saturn.php' => config_path('saturn.php'),
        ]);
        $this->loadMigrationsFrom(__DIR__.'/migrations');
    }
}
