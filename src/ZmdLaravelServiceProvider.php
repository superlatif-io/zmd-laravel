<?php

namespace Superlatif\ZmdLaravel;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class ZmdLaravelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'zmd');
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        Blade::directive('zmdInit', function () {
            return "<?php echo view('zmd::javascript')->render(); ?>";
        });

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('zmd.php'),
            ], 'config');

            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/zmd'),
            ], 'views');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'zmd');

        // Register the main class to use with the facade
        $this->app->singleton('zmd-laravel', function () {
            return new ZmdLaravel;
        });
    }
}
