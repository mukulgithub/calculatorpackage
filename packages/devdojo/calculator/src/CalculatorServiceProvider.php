<?php

namespace Devdojo\Calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
         $this->app->make('Devdojo\Calculator\CalculatorController');
		 $this->loadViewsFrom(__DIR__.'/views', 'calculator');
    }
}
