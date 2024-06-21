<?php

namespace laravelApiBase\boundedContext1;

use Illuminate\Support\ServiceProvider;

class BoundedContext1ServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/api/routes/BoundedContext1Routes.php');
    }

    public function boot(): void
    {

    }
}
