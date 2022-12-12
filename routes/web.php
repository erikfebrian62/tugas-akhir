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
Route::get('/login', function () {
    return view('auth.login.index');
});


Route::get('/user', function () {
    return view('users.dashboard.index');
});

Route::get('/', function () {
    return view('admin.dashboard.index');
});
Route::get('/register', function () {
    return view('auth.register.index');
});

Route::get('/info-users', function () {
    return view('admin.info-users.index');
});
