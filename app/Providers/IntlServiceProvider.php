<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class IntlServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // The NumberFormatter class is now loaded via bootstrap/intl.php
        // This service provider is kept for any future intl-related functionality
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

