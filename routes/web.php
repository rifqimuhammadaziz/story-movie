<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\DashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::prefix('app')->group(function () {
    Route::get('dashboard',[DashboardController::class,'index'])->name('admin.dashboard');
});

Route::get('/', [HomeController::class,'index'])->name('home');
