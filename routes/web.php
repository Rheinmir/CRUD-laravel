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

// Defines a route group with prefix 'admin', containing a route to 'index' action of AdminController named 'admin.index'.
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
});
