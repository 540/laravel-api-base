<?php

namespace laravelApiBase\Status;

use Illuminate\Support\ServiceProvider;

class StatusServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/Api/Routes/StatusRoutes.php');
    }

    public function boot(): void
    {

    }
}
