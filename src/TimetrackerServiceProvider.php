<?php

namespace Wise\Timetracker;

use Illuminate\Support\ServiceProvider;

class TimetrackerServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        if(!$this->app->routesAreCache()){
            require __DIR__.'/routes.php';
        }
        $this->loadViewFrom(base_path('resources/views'),'timetracker');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views')
        ]);

        $this->publishes([
            __DIR__.'/migrations' => base_path('migrations')
        ],'migrations');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}