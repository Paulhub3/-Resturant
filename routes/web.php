<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BookedController;
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


/* BOOKED SIDE */
Route::get('/book-table', [BookedController::class, 'index']);
Route::post('/booked', [BookedController::class, 'store']);

/* ADMIN BOOK ROUTE */
Route::get('/admin-book', [BookedController::class, 'create']);
Route::delete('/admin-book/{id}/destroy', [BookedController::class, 'destroy']);


/* ADMIN REGISTER ROUTE */
Route::get('/admin-control-register', [RegisterController::class, 'index']);
Route::post('/admin-control-register', [RegisterController::class, 'store']);

/* ADMIN LOGIN ROUTE */
Route::get('/admin-control-login', [LoginController::class, 'index'])->name('login');
Route::post('/admin-control-login', [LoginController::class, 'store']);

/* ADMIN MENU SIDE


/* ADMIN MAIN HOME */
Route::get('/admin-dashboard-control', [MenuController::class, 'index']);
Route::post('/menu', [MenuController::class, 'store']);


/* MENU ADMIN DASHBORD*/
Route::get('/menu-table', [MenuController::class, 'create']);
Route::delete('/menu-table/{id}/destroy', [MenuController::class, 'destroy']);
