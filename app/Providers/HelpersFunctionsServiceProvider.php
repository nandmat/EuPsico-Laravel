<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HelpersFunctionsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        require_once app_path() . '/Http/HelperFunctions.php';
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
