<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: [
            __DIR__.'/../laravelApiBase/boundedContext1/Api/Routes/BoundedContext1Routes.php',
            __DIR__.'/../laravelApiBase/boundedContext2/Api/Routes/BoundedContext2Routes.php',
        ],
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
