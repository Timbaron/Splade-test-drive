<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['splade'])->group(function () {
    Route::get('/', fn () => view('home'))->name('home');
    Route::get('/quotes', fn () => view('quote'))->name('quotes');

    Route::get('users', [UserController::class, 'index'])->name('users');
    Route::get('/user/{user}', [UserController::class, 'show'])->name('user.show');
    Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/user/{user}', [UserController::class, 'update'])->name('user.update');

    // Registers routes to support Table Bulk Actions and Exports...
    // Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    // Route::spladeUploads();
});
