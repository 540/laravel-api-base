<?php

namespace laravelApiBase\statusEndpoint;

use Illuminate\Support\ServiceProvider;

class StatusEndpointServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/api/routes/statusEndpointRoutes.php');
    }

    public function boot(): void
    {

    }
}
