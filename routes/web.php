<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MedalController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('/')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('edit', [HomeController::class, 'edit'])->name('home.edit');
    Route::post('store', [HomeController::class, 'store'])->name('home.store');
});

Route::prefix('medal')->group(function () {
    Route::get('/', [MedalController::class, 'fetchClip'])->name('medal.index');
});

