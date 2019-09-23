<?php

namespace DesignByCode\Classified\Providers;

use Illuminate\Support\ServiceProvider;

class ClassifiedServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        $this->publishes([
            __DIR__.'/../../config/auth.php' => config_path('auth.php'),
            __DIR__.'/../../config/database.php' => config_path('database.php'),
            __DIR__.'/../../config/services.php' => config_path('services.php'),
        ], 'classified');

        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadRoutesFrom(__DIR__ . '/../routes/api.php');
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
        $this->loadViewsFrom(__DIR__ . '/../views', 'classified');

    }
}
