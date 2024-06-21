<?php

namespace laravelApiBase\boundedContext2;

use Illuminate\Support\ServiceProvider;

class BoundedContext2ServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/api/routes/BoundedContext2Routes.php');
    }

    public function register(): void
    {

    }
}
