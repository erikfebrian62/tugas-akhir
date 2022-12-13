<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\auth\VerificationController;
use App\Http\Controllers\users\MainController;
use App\Http\Controllers\users\ProdukController;
use App\Http\Controllers\users\LaporanController;
use App\Http\Controllers\admin\InfouserController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\users\CalculateController;

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
Route::get('/', [AuthController::class, 'register_index'])->name('register.index');
Route::post('/', [AuthController::class, 'register_proces'])->name('register.proces');

Route::middleware('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'login_index'])->name('login.index');
    Route::post('/login', [AuthController::class, 'login_proces'])->name('login.proces');
});

Route::get('/logout', function () {
    Auth::logout();

    return redirect(route('login.index'));
})->name('logout');

//verifycation email
Route::get('/email/verify/need-verification', [VerificationController::class, 'notice'])->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->middleware('auth','signed')->name('verification.verify');
Route::get('/email/verify/resend-verification', [VerificationController::class, 'send'])->middleware('auth','throttle:6,1')->name('verification.send');


Route::middleware(['auth', 'auth.session', 'verified'])->group(function () {
    // admin
    Route::prefix('admin')->name('admin.')->middleware('role:admin')->group( function() {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/info-users', [InfouserController::class, 'index'])->name('info-user');
    });

    //users
    Route::prefix('user')->name('user.')->middleware('role:user')->group( function() {
        Route::get('/dashboard', [MainController::class, 'index'])->name('dashboard');
        Route::get('/kelola-produk', [ProdukController::class, 'index'])->name('kelola-produk');
        Route::get('/calculate-profit', [CalculateController::class, 'index'])->name('calculate');
        Route::get('/laporan-keuangan', [LaporanController::class, 'index'])->name('laporan');
    });
});
