<?php

use Illuminate\Support\Facades\Route;

Route::get(
    '/statusEndpoint',
    [\laravelApiBase\statusEndpoint\api\controllers\statusController::class, '__invoke']
);
