<?php

use Illuminate\Support\Facades\Route;

Route::get(
    '/statusEndpoint',
    [\laravelApiBase\boundedContext1\api\controllers\statusController::class, '__invoke']
);
