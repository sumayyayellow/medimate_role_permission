<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Schema;

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
        Schema::defaultStringLength(191);

        // if (config('app.debug')) {
        //     error_reporting(E_ALL & ~E_USER_DEPRECATED);
        // } else {
        //     error_reporting(0);
        // }

        
    }
}
