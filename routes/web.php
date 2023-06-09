<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/register',[RegisterController::class, 'index'])->name('register');

Route::post('/register',[RegisterController::class, 'store']);

Route::get('/calendar', function () {
    return view('calendar.index');
});

Route::get('/posts', function () {
    return view('posts.index');
});
