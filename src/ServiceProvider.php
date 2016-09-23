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
        // Default package configuration
        $this->mergeConfig();
        
        // Register singleton
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
        // Publish the config file
        $this->publishConfig();
        
        // Add custom blade directive @ifActiveUrl
        \Blade::directive('ifActiveRoute', function($expression) {
            return "<?php if (Active::route({$expression})): ?>";
        });
    }

    /**
     * Default package configuration
     *
     * @return void
     */
    protected function mergeConfig()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/activemenu.php', 'activemenu'
        );
    }

    /**
     * Publish the config file
     *
     * @return void
     */
    protected function publishConfig()
    {
        $this->publishes([
            __DIR__ . '/../config/activemenu.php' => config_path('activemenu.php')
        ], 'config');
    }

}
