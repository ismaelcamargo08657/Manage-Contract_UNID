<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View; 
use Illuminate\Support\Facades\Cookie;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         View::composer('*', function ($view) {
        $datosCookie = [];

        if (request()->hasCookie('datos_personales')) {
            $cookie = request()->cookie('datos_personales');
            $datosCookie = json_decode($cookie, true);
        }

        $view->with('datosCookie', $datosCookie);
    });
    }
}
