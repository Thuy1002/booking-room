<?php

use App\Http\Controllers\Admin\TypeController;
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

Route::prefix('/admin/types')->name('admin.types')->controller(TypeController::class)->group( function(){
     Route::get('list','index')->name('list');
     Route::get('add','add')->name('add');
     Route::post('store','store')->name('store');
     Route::put('update/{id}','update')->name('update');
     Route::get('delete/{id}','delete')->name('delete');
});

