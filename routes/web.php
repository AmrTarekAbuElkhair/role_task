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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'App\Http\Controllers\AuthController@login_form')->name('login');
Route::post('/login', 'App\Http\Controllers\AuthController@login')->name('users.login');
Route::get('/dashboard', 'App\Http\Controllers\AuthController@dashboard')->name('dashboard.index');
Route::get('/user', 'App\Http\Controllers\AuthController@user')->name('user.index');
