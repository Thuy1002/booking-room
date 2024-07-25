<?php

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

Route::prefix('rooms')->name('rooms.')->controller(RoomController::class)->group( function(){
    Route::get('','index')->name('list');
    Route::get('/{id}','detail')->name('detail');
    Route::post('select-type','filterRoom')->name('select');
   
});


