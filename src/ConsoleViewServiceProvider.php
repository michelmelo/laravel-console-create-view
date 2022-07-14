<?php

namespace MichelMelo\ConsoleView;

use Illuminate\Support\ServiceProvider;

class ConsoleViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        $this->loadViewsFrom(__DIR__ . DIRECTORY_SEPARATOR . 'views', 'consoleview');

        $this->publishes([
            __DIR__ . DIRECTORY_SEPARATOR . 'views' => resource_path('views/vendor/consoleview')
        ]);

        if ($this->app->runningInConsole()) {

            $this->commands([ConsoleView::class]);
        }
    }
}
