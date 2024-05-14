<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('app')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('dashboard',[DashboardController::class,'index'])->name('admin.dashboard');
    });
});

Route::get('/', [HomeController::class,'index'])->name('home');