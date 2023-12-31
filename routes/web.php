<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\ProductController;
use App\Livewire\Materials;
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

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('{categoryButton}/{CategoryId}', [MaterialController::class, 'load'])
    ->name('cat.give');

Route::get('{cleanedUrl}/{productId}', [ProductController::class, ''])
    ->name('prod.give');

require __DIR__.'/auth.php';
