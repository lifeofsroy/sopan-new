<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Support\Zoom;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('zoom', function(){
            return new Zoom();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
