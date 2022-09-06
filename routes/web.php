<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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

Route::get('/menu', function () {
    return Inertia::render('Menu');
});

Route::get('/about-us', function () {
    return Inertia::render('About');
});

Route::get('/contact-us', function () {
    return Inertia::render('Contact');
});

/* ADMIN REGISTER ROUTE */
Route::get('/admin-control-register', [RegisterController::class, 'index']);
Route::post('/admin-control-register', [RegisterController::class, 'store']);

/* ADMIN LOGIN ROUTE */
Route::get('/admin-control-login', [LoginController::class, 'index'])->name('login');
Route::post('/admin-control-login', [LoginController::class, 'store']);

/* ADMIN MAIN HOME */
Route::get('/admin-dashboard-control', [RegisterController::class, 'create'])->middleware('auth');
Route::post('/admin-update', [RegisterController::class, 'update']);
