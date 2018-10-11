<?php

namespace Droplister\EduCore;

use Illuminate\Support\ServiceProvider;

class EduCoreServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * Assets
         */
        $this->publishes([
            __DIR__ . '/resources/assets' => resource_path('assets/vendor/edu-core'),
        ], 'edu-core');

        /**
         * Commands
         */
        if ($this->app->runningInConsole())
        {
            $this->commands([
                //
            ]);
        }

        /**
         * Configuration
         */
        $this->publishes([
            __DIR__.'/config' => config_path(''),
        ], 'edu-core');

        /**
         * Migrations
         */
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        /**
        * Routes
        */
        $this->app->router->group(['namespace' => 'Droplister\EduCore\App\Http\Controllers'],
            function () {
                require __DIR__.'/routes/web.php';
            }
        );

        /**
        * Views
        */
        $this->loadViewsFrom(__DIR__.'/resources/views', 'edu-core');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}