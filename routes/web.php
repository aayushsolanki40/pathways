<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UI\Home\HomeController;
use App\Http\Controllers\UI\Nft\NFTController;
use App\Http\Controllers\UI\Auth\AuthController;
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
// Route::prefix('admin')->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/', 'index')->name('ui.home');
    });
// });
Route::prefix('auth')->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login', 'login')->name('ui.auth.login');
        Route::get('/signup', 'signUp')->name('ui.auth.signup');
    });
});
Route::middleware('auth')->group(function () {
    Route::controller(NFTController::class)->group(function () {
        Route::get('/create', 'create')->name('ui.nft.create');
    });
});
