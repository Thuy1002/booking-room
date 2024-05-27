<?php

use App\Http\Controllers\Client\BookingController;
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

Route::prefix('booking')->name('booking.')->middleware('check-user')->controller(BookingController::class)->group( function(){
    Route::get('','index')->name('list');
    Route::post('/{id}','addcart')->name('addcart');
    Route::get('update-status-payment/{id}','updateSttPayment')->name('update');
   
});


