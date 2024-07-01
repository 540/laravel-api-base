<?php

namespace Laravel\Console;

use Carbon\Laravel\ServiceProvider;
use Laravel\Console\Commands\InsertarOperarios;

class ConsoleServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/Migrations/2024_06_27_093310_create_operarios_table.php');
    }
    public function boot(): void
    {
        $this->commands(InsertarOperarios::class);
    }
}
