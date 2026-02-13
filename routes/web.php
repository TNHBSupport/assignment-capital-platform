<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdvanceFeeController;

Route::get('/', function () {
    return view('welcome');
});

// Advance Fee Application Routes
Route::get('/advance-fee', [AdvanceFeeController::class, 'show'])->name('advance-fee.show');
Route::post('/advance-fee', [AdvanceFeeController::class, 'submit'])->name('advance-fee.submit');
