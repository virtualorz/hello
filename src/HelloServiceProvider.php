<?php

namespace Virtualorz\Hello;

use Illuminate\Support\ServiceProvider;

class HelloServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        /*$this->app->make(HelloController::class);

        include(__DIR__ . '/routes.php');
    
        $this->loadViewsFrom(__DIR__ . '/views', 'Hello');*/
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
