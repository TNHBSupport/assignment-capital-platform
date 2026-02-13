<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdvanceFeeController;
use App\Http\Controllers\AdminAuthController;

Route::get('/', [AdvanceFeeController::class, 'show'])->name('home');

// Advance Fee Application Routes
Route::get('/advance-fee', [AdvanceFeeController::class, 'show'])->name('advance-fee.show');
Route::post('/advance-fee', [AdvanceFeeController::class, 'submit'])->name('advance-fee.submit');

// Assessment Fee (alias to Advance Fee form)
Route::get('/assessment-fee', [AdvanceFeeController::class, 'show'])->name('assessment-fee.show');

// Temporary admin view (remove or protect before production)
Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::middleware('temp.admin')->group(function () {
    Route::get('/admin/applications', [AdvanceFeeController::class, 'index'])->name('applications.index');
    Route::get('/admin/applications/{application}', [AdvanceFeeController::class, 'showApplication'])->name('applications.show');
    Route::delete('/admin/applications/{application}', [AdvanceFeeController::class, 'destroy'])->name('applications.destroy');
});
