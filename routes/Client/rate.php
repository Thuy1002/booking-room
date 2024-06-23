
<?php

use App\Http\Controllers\Client\CommentController;
use App\Http\Controllers\Client\RateController;
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

Route::prefix('rate')->name('rate.')->controller(RateController::class)->group( function(){
  
   Route::post('rate/{id}','rate');
});


