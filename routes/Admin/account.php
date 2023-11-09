<?php

use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\Admin\UserController;
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

Route::prefix('/admin/account')->name('admin.account.')->middleware('check-admin')->controller(AccountController::class)->group( function(){
    Route::get('about','index')->name('about');
    Route::post('changepro','changepro')->name('change');
    Route::match(['get', 'post'],'changepass', 'updatePass')->name('pass_new');
});

