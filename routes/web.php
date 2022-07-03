<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminTransactionController;
use App\Http\Controllers\Admin\AdminUIController;
use App\Http\Controllers\Admin\UsersControllerAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UI\Home\HomeController;
use App\Http\Controllers\UI\Nft\NFTController;
use App\Http\Controllers\UI\Auth\AuthController;
use App\Http\Controllers\UI\User\UserController;
use App\Http\Controllers\UI\PaymentGateway\PaymentGateway;
use App\Http\Controllers\PayPalPaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web r
outes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/storage/{foldername}/{filename}', function ($foldername, $filename)
{
    try{
        return Image::make(storage_path("app/public/$foldername/$filename"))->response();
    }catch(\Intervention\Image\Exception\NotReadableException $e){
        return response()->file(storage_path("app/public/$foldername/$filename"));
    }
});
// Route::prefix('admin')->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/', 'index')->name('ui.home');
    });
// });
Route::prefix('auth')->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login', 'login')->name('ui.auth.login');
        Route::post('/login', 'checkLogin')->name('ui.auth.checkLogin');
        Route::get('/signup', 'signUp')->name('ui.auth.signup');
        Route::post('/signup', 'publishSignUp')->name('ui.auth.makeSignup');
        Route::get('/logout', 'logout')->name('ui.auth.logout');
    });
});
Route::middleware('user')->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/profile', 'profile')->name('ui.user.profile');
        Route::get('/mycollections', 'myCollections')->name('ui.user.mycollections');
        Route::get('/favorite', 'favorite')->name('ui.user.favorite');
    });

    Route::prefix('nft')->group(function () {
        Route::controller(NFTController::class)->group(function () {
            Route::get('/create', 'create')->name('ui.nft.create');
            Route::post('/create', 'store')->name('ui.nft.store');
            Route::get('/explorer', 'explorer')->name('ui.nft.explorer');
            Route::get('/ranking', 'ranking')->name('ui.nft.ranking');
            Route::get('/details/{nftId}', 'viewnft')->name('ui.nft.details');
        });
    });

    Route::prefix('payment')->group(function () {
        Route::controller(PaymentGateway::class)->group(function () {
            Route::get('/checkout/nft/{nftId}', 'checkout')->name('ui.checkout.nft');
            Route::get('/make/{nftId}', 'makePayment')->name('make.payment.nft');
            Route::get('/cancel', 'cancelPayment')->name('cancel.payment');
            Route::get('/success', 'successPayment')->name('success.payment');
        });
    });

    Route::controller(PayPalPaymentController::class)->group(function () {
        Route::post('handle-payment', 'handlePayment')->name('make.payment');
        Route::get('cancel-payment', 'paymentCancel')->name('cancel.payment');
        Route::get('payment-success', 'paymentSuccess')->name('success.payment');
    });
});
Route::prefix('admin')->group(function () {
    Route::controller(AdminAuthController::class)->group(function () {
        Route::get('/login', 'loginPage')->name('admin.login');
        Route::get('/', 'loginPage');
        Route::get('/logout', 'logout')->name('admin.logout');
        Route::post('/login', 'login')->name('admin.login.post');
    });

    Route::middleware('admin')->group(function () {
        Route::controller(AdminUIController::class)->group(function () {
            Route::get('/dashboard', 'index')->name('admin.homepage');
            Route::get('/profile', 'profile')->name('admin.profile');
            Route::post('/profile', 'updateprofile')->name('admin.updateprofile');
        });

        Route::prefix('users')->group(function () {
            Route::controller(UsersControllerAdmin::class)->group(function () {
                Route::get('/users', 'index')->name('admin.users.index');
            });
        });

        Route::prefix('transaction')->group(function () {
            Route::controller(AdminTransactionController::class)->group(function () {
                Route::get('/', 'index')->name('admin.transaction.all');
            });
        });
    });
});

