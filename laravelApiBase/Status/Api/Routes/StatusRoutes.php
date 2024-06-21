<?php

use Illuminate\Support\Facades\Route;
use laravelApiBase\Status\Api\Controllers\StatusController;

Route::get('/status', StatusController::class)
    ->name('status');
