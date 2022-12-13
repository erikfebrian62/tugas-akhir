<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\users\CalculateController;
use App\Http\Controllers\users\DashboardController as UsersDashboardController;
use App\Http\Controllers\users\LaporanController;
use App\Http\Controllers\users\ProdukController;
use Illuminate\Routing\RouteGroup;
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

//auth
Route::get('/login', function () {
    return view('auth.login.index');
});


// admin
Route::prefix('admin')->name('admin.')->middleware('role:admin')->group( function() {
    Route::get('/dashboard', ['admin\DashboardController@index'])->name('dashboard');
    Route::get('/info-users', [InfouserController::class, 'index'])->name('info-user');
});

//users
Route::prefix('users')->name('user.')->middleware('role:user')->group( function() {
    Route::get('/dashboard', ['users\DashboardController@index'])->name('dashboard');
    Route::get('/kelola-produk', [ProdukController::class, 'index'])->name('kelola-produk');
    Route::get('/calculate-profit', [CalculateController::class, 'index'])->name('calculate');
    Route::get('/laporan-keuangan', [LaporanController::class, 'index'])->name('laporan');
});

