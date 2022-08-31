<?php

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

Route::get('/login',[\App\Http\Controllers\mainController::class, 'loginScreen']);
Route::get('/signup',[\App\Http\Controllers\mainController::class, 'signupScreen']);

Route::get('/', function () {
    return view('welcome');
});
