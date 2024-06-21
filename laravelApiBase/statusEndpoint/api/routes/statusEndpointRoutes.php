<?php

use Illuminate\Support\Facades\Route;
use laravelApiBase\statusEndpoint\api\controllers\statusController;

Route::get('/status', statusController::class)
    ->name('status');
