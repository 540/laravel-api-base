<?php

namespace Laravel\BoundedContext2;

use Illuminate\Support\ServiceProvider;

class BoundedContext2ServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/Api/Routes/BoundedContext2Routes.php');
    }

    public function register(): void
    {
    }
}
