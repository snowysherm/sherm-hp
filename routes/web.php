<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoreController;
use App\Http\Controllers\MedalController;
use App\Http\Controllers\RomanCalculatorController;use Illuminate\Support\Facades\Route;

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
    Route::get('delete/{post}', [HomeController::class, 'delete'])->name('home.delete');
});

Route::prefix('roman-calculator')->group(function () {
    Route::get('/', [RomanCalculatorController::class, 'index'])->name('romanCalculator.index');
    Route::any('/calculated', [RomanCalculatorController::class, 'calculateNumber'])->name('romanCalculator.calculate');
});

Route::prefix('medal')->group(function () {
    Route::get('/', [MedalController::class, 'fetchClip'])->name('medal.index');
});

Route::prefix('lore')->group(function () {
    Route::get('/', [LoreController::class, 'index'])->name('lore.index');
});

