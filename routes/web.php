<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BookedController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BreakfastController;

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


/* BOOKED SIDE */
Route::get('/book-table', [BookedController::class, 'index']);
Route::post('/booked', [BookedController::class, 'store']);

/* ADMIN BOOK ROUTE */
Route::get('/admin-book', [BookedController::class, 'create'])->middleware('auth');
Route::delete('/admin-book/{id}/destroy', [BookedController::class, 'destroy']);


/* ADMIN REGISTER ROUTE */
Route::get('/admin-control-register', [RegisterController::class, 'index']);
Route::post('/admin-control-register', [RegisterController::class, 'store']);

/* ADMIN LOGIN ROUTE */
Route::get('/admin-control-login', [LoginController::class, 'index'])->name('login');
Route::post('/admin-control-login', [LoginController::class, 'store']);

/* ADMIN MAIN HOME */
Route::get('/admin-dashboard-control', [RegisterController::class, 'create']);


/* ADMIN MENU CREATE LINKS */


/* BREAK FAST SIDE */
Route::get('/breakfast-menu', [BreakfastController::class, 'index']);
Route::post('/breakfast', [BreakfastController::class, 'store']);

/* ADMIN DASHBORD */
Route::get('/breakfast-table', [BreakfastController::class, 'create'])->middleware('auth');
Route::delete('/breakfast-table/{id}/destroy', [BreakfastController::class, 'destroy']);



Route::get('/dinner-menu', function () {
    return Inertia::render('Dinner');
});

Route::get('/drinks-menu', function () {
    return Inertia::render('Drinks');
});

Route::get('/lunch-menu', function () {
    return Inertia::render('Lunch');
});
