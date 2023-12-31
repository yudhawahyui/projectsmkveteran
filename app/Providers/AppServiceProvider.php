<?php

namespace App\Providers;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        if (env(key: 'APP_ENV') !== 'local') {
            URL::forceScheme(scheme: 'http');
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        setlocale(LC_ALL, 'IND');
        Carbon::setLocale('id');


    }
}
