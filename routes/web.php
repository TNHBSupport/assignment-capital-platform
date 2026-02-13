<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdvanceFeeController;

Route::get('/', [AdvanceFeeController::class, 'show'])->name('home');

// Advance Fee Application Routes
Route::get('/advance-fee', [AdvanceFeeController::class, 'show'])->name('advance-fee.show');
Route::post('/advance-fee', [AdvanceFeeController::class, 'submit'])->name('advance-fee.submit');

// Assessment Fee (alias to Advance Fee form)
Route::get('/assessment-fee', [AdvanceFeeController::class, 'show'])->name('assessment-fee.show');

// Temporary admin view (remove or protect before production)
Route::get('/admin/applications', [AdvanceFeeController::class, 'index'])->name('applications.index');
