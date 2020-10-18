<?php

namespace Jossephus\AllNotifications;

use Illuminate\Support\ServiceProvider;
use Jossephus\AllNotifications\Commands\AllNotificationsCommand;

class AllNotificationsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {


        if ($this->app->runningInConsole()) {
            $this->commands([
                AllNotificationsCommand::class,
            ]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // // Automatically apply the package configuration
        // $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'all-notifications');

        // // Register the main class to use with the facade
        // $this->app->singleton('all-notifications', function () {
        //     return new AllNotifications;
        // });
    }
}
