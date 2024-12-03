<?php

namespace App\Providers;
use Auth;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        view()->composer('*', function ($view)
        {
            $user = Auth()->user();
            $view->share('me', $user);
        });
    }
}
