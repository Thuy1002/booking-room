<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\StatisticsController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Input\Input;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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


Route::prefix('admin/statistics')->name('admin.statistics.')->middleware(['check-user', 'check-admin'])->controller(StatisticsController::class)->group(function () {
    Route::get('users', 'user')->name('user');
    Route::get('delete-user/{id}', 'deleUser')->name('deleUser');
    Route::get('rooms', 'rooms')->name('rooms');
    Route::get('income', 'income')->name('income');
   
});
