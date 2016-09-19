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
        // Default package configuration
        $this->mergeConfigFrom(
            __DIR__ . '/../config/activemenu.php', 'activemenu'
        );

        $this->app->singleton('active', function($app) {
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
        // Add custom blade directive @ifActiveUrl
        \Blade::directive('ifActiveRoute', function($expression) {
            return "<?php if (Active::route({$expression})): ?>";
        });

        // Publish the config file
        $this->publishConfig();
    }

    /**
     * Publish the config file.
     */
    protected function publishConfig()
    {
        $this->publishes([
            __DIR__ . '/../config/activemenu.php' => config_path('activemenu.php')
        ], 'config');
    }


}
