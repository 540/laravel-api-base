<?php

use Illuminate\Support\Facades\Route;
use Laravel\Status\Api\Controllers\StatusController;

Route::get('/status', StatusController::class)
    ->name('status');
