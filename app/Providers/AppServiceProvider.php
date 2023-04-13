<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Vite;

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
        Paginator::useBootstrapFive();
        Vite::macro('img', fn (string $asset) => $this->asset("resources/img/{$asset}"));
        Vite::macro('icon', fn (string $asset) => $this->asset("resources/img/icon/{$asset}"));

    }
}
