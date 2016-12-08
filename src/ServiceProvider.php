<?php

namespace Juy\ActiveMenu;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

/**
 * Class ServiceProvider
 * 
 * @package Juy\ActiveMenu
 */
class ServiceProvider extends BaseServiceProvider
{
    /**
     * Package name
     *
     * @var string
     */
    protected $package = 'activemenu';

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
        $this->app->singleton('active', function ($app) {
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
        
        // Register Blade extensions
        $this->registerBladeExtensions();
    }

    /**
     * Default package configuration
     *
     * @return void
     */
    protected function mergeConfig()
    {
        $this->mergeConfigFrom(
            $this->packagePath('config/config.php'), $this->package
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
            $this->packagePath('config/config.php') => config_path($this->package . '.php')
        ], 'config');
    }

    /**
     * Register Blade extensions
     *
     * @return void
     */
    protected function registerBladeExtensions()
    {
        // Add custom blade directive @ifActiveRoute
        $this->app['blade.compiler']->directive('ifActiveRoute', function ($expression) {
            return "<?php if (Active::route({$expression})): ?>";
        });
    }
    
    /**
     * Loads a path relative to the package base directory
     *
     * @param string $path
     * @return string
     */
    protected function packagePath($path = '')
    {
        return sprintf('%s/../%s', __DIR__, $path);
    }

}
