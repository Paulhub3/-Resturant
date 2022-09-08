<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', function () {
    return Inertia::render('Home');
});


/* CONTACT PAGE */
Route::get('/contact-us', [MessageController::class, 'index']);
Route::post('/contact-us-msg', [MessageController::class, 'store']);

/* ADMIN MESSAGE ROUTE */
Route::get('/admin-message', [MessageController::class, 'create'])->middleware('auth');
Route::delete('/admin-message/{id}/destroy', [MessageController::class, 'destroy']);


/* ADMIN REGISTER ROUTE */
Route::get('/admin-control-register', [RegisterController::class, 'index']);
Route::post('/admin-control-register', [RegisterController::class, 'store']);

/* ADMIN LOGIN ROUTE */
Route::get('/admin-control-login', [LoginController::class, 'index'])->name('login');
Route::post('/admin-control-login', [LoginController::class, 'store']);

/* ADMIN MAIN HOME */
Route::get('/admin-dashboard-control', [RegisterController::class, 'create'])->middleware('auth');
Route::post('/admin-update', [RegisterController::class, 'upload']);


/* ADMIN MENU CREATE LINKS */

Route::get('/breakfast-menu', function () {
    return Inertia::render('Breakfast');
});

Route::get('/dinner-menu', function () {
    return Inertia::render('Dinner');
});

Route::get('/drinks-menu', function () {
    return Inertia::render('Drinks');
});

Route::get('/lunch-menu', function () {
    return Inertia::render('Lunch');
});
