<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [UserController::class, 'login'])->name('login');
Route::post('loginaksi', [UserController::class, 'loginaksi'])->name(
    'loginaksi'
);
Route::get('logoutaksi', [UserController::class, 'logoutaksi'])->name(
    'logoutaksi'
);

Route::middleware('auth')->group(function () {
    Route::get('/home', [UserController::class, 'index'])->name('home');
    Route::get('settings', [UserController::class, 'settings'])->name(
        'settings'
    );

    Route::get('details', [DashboardController::class, 'details'])->name(
        'details'
    );

    Route::get('vError', [DashboardController::class, 'vError'])->name(
        'vError'
    );

    Route::get('qrcode', [UserController::class, 'qrcode'])->name('qrcode');
});
