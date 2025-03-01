<?php

use App\Http\Controllers\Client\BlogController;
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

Route::prefix('blogs')->name('blog.')->controller(BlogController::class)->group(function () {
    Route::get('', 'index')->name('list-blog');
    Route::get('bai-viet/{id}','detail')->name('detail');
});
