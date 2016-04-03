<?php

namespace Juy\ActiveMenu;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class ServiceProvider extends IlluminateServiceProvider
{
    /**
     * Register the application services
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('active', function ($app) {
            return new Active($app['router']->current()->getName());
        });
    }
    
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
