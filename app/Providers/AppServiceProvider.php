<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
        Blade::directive('js', function ($path, $secure = null) {
            return app('url')->asset('/js/'.$path, $secure);
        });

        Blade::directive('css', function ($path, $secure = null) {
            return app('url')->asset('/css/'.$path, $secure);
        });

        Blade::directive('img', function ($path, $secure = null) {
            return app('url')->asset('/img/'.$path, $secure);
        });

    }
}
