<?php

namespace Juy\ActiveMenu;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class ServiceProvider extends IlluminateServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the application services
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('active', function($app) {
           return new Active($app['router']->current()->getName());
        });
    }

    /**
     * Perform post-registration booting of services
     *
     * @return void
     */
    public function boot()
    {
        // Add custom blade directive @ifActiveUrl
        \Blade::directive('ifActiveRoute', function($expression) {
            return "<?php if (Active::route({$expression})): ?>";
        });

        // Register configurations
        $this->registerConfigurations();
    }

    /**
     * Register configurations
     *
     * @return void
     */
    protected function registerConfigurations()
    {
        // Default package configuration
        $this->mergeConfigFrom(
            __DIR__ . '/../config/activemenu.php', 'activemenu'
        );

        // Publish the config file
        $this->publishes([
            __DIR__ . '/../config/activemenu.php' => config_path('activemenu.php')
        ], 'config');
    }

}
