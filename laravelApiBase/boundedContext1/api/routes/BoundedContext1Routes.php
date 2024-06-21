<?php

use Illuminate\Support\Facades\Route;

Route::get(
    '/boundedContext1',
    [\laravelApiBase\boundedContext1\api\controllers\statusController::class, '__invoke']
);


