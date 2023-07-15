<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;



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

Route::get('/', [HomeController::class, 'home'])->middleware('auth');

Route::get('/login', [AuthController::class, 'login'])->name("login")->prefix('auth');
Route::get('/register', [AuthController::class, 'register'])->prefix('auth');
Route::post('/register/control', [AuthController::class, 'register_control'])->prefix('auth');

// TODO diğer derste bunları Route Group metoduyla değiştir.