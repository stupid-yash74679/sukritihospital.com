<?php

namespace App\Providers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $basics = Storage::disk('public')->get('basics.json');
            $BasicsInfo = json_decode($basics, true);
            $view->with('BasicsInfo', $BasicsInfo[0]);
            $servicesList = Storage::disk('public')->get('services.json');
            $services = json_decode($servicesList, true);
            $view->with('services', $services);
           });
    }
}
