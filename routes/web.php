<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;


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

// HOME CONTROLLER ROTA GRUBU
Route::controller(HomeController::class)->middleware('auth')->group(function(){
    Route::get('/', 'home');
});


// AUTH ROTA GRUBU
Route::controller(AuthController::class)->prefix('auth')->group(function(){
    Route::get('/login', 'login')->name('login');
    Route::post('/login/control', 'login_control');
    Route::get('/register', 'register');
    Route::post('/register/control', 'register_control');
    Route::get('/logout', 'logout');
});

// Courses ROTA GRUBU
Route::controller(CourseController::class)->prefix('courses')->group(function(){
    Route::get('/', 'all');
    Route::get('/detail/{id}', 'detail');

    Route::post('/add/comment', 'add_comment');
    Route::post('/add/favorite', 'add_favorite');
    Route::post('/add/sub', 'add_sub');

    Route::post('/remove/favorite', 'remove_favorite');
});