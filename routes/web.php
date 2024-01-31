<?php

use App\Http\Controllers\HomeController;use App\Http\Controllers\LoreController;use App\Http\Controllers\MedalController;use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('/')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('edit', [HomeController::class, 'edit'])->name('home.edit');
    Route::post('store', [HomeController::class, 'store'])->name('home.store');
    Route::get('delete/{post}', [HomeController::class, 'delete'])->name('home.delete');
});

Route::prefix('medal')->group(function () {
    Route::get('/', [MedalController::class, 'fetchClip'])->name('medal.index');
});

Route::prefix('lore')->group(function () {
    Route::get('/', [LoreController::class, 'index'])->name('lore.index');
    Route::get('/', [LoreController::class, 'index'])->name('lore.index');
    Route::get('edit', [LoreController::class, 'edit'])->name('lore.edit');
    Route::post('store', [LoreController::class, 'store'])->name('lore.store');
    Route::get('delete/{lore}', [LoreController::class, 'delete'])->name('lore.delete');
});

require __DIR__.'/auth.php';
