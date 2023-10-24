<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Client\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::controller(HomeController::class)->middleware('check-user')->group(
    function () {
        Route::get('/','index')->name('client');
    }
);

Route::prefix('/')->name('auth.')->controller(AuthController::class)->group(function(){
    Route::get('login', 'index')->name('login');
    Route::get('logout', 'logout')->name('logout');
    Route::post('handel', 'handleLogin')->name('handleLogin');
});