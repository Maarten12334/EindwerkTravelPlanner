<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelController;

Route::get('/', function () {
    return view('welcome');
});

// routes/web.php
Route::get('/flights', [TravelController::class, 'searchFlights']);
