<?php

namespace QzLaravel\Providers;

use Illuminate\Support\ServiceProvider;

class FoundationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'qzlaravel');
        $this->loadViewsFrom(__DIR__.'/../views/partial', 'qzlaravel.partial');
        $this->publishes([
            __DIR__.'/../public/bootstrap' => public_path('bootstrap'),
            __DIR__.'/../public/css' => public_path('css'),
            __DIR__.'/../public/fonts' => public_path('fonts'),
            __DIR__.'/../public/js' => public_path('js'),
            __DIR__.'/../public/plugins' => public_path('plugins')
        ], 'public');
        $this->publishes([
            __DIR__.'/../config/qz.php' => config_path('qz.php')
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/../routes.php';
        $this->app->make('QzLaravel\Controllers\AuthController');
        $this->app->make('QzLaravel\Controllers\CookieController');
        $this->app->make('QzLaravel\Controllers\SessionController');
    }
}
