<?php

use App\Http\Controllers\Client\BookingController;
use App\Http\Controllers\Client\PaymentController;
use App\Http\Controllers\Client\RoomController;
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

Route::prefix('payment')->name('payment.')->middleware('check-user')->controller(PaymentController::class)->group(function () {
    Route::get('', 'pay')->name('pay2'); //đã sửa lại bên view chekcout của booking
    Route::post('vnpay_payment', 'payment')->name('vnpay');
    Route::get('vnp-return', 'vnpayReturn')->name('vnpay_return');
});
