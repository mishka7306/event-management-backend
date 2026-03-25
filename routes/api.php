<?php

use Illuminate\Support\Facades\Route;

Route::post('/save-event', [\App\Http\Controllers\EventController::class, 'store']);