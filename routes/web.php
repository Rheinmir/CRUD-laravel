<?php

// Defines routes for a Laravel application.
use Illuminate\Support\Facades\Route;
// Imports HomeController and AdminController from the App\Http\Controllers namespace.
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

// Defines a route group with '/' prefix, containing a GET route to HomeController's index method named 'home.index'.
Route::group(['prefix' => ''], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
});

Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');

// Defines a group of routes with admin prefix, requiring authentication.
Route::group(['prefix' => 'admin','middleware' => 'auth'], function() {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
});
