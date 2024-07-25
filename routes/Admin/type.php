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

Route::prefix('/admin/type')->name('admin.types.')->middleware(['check-user','check-admin'])->controller(TypeController::class)->group( function(){
     Route::get('type-of-room','index')->name('list');
     Route::get('create-room-type','add')->name('add');
     Route::get('fillstt','fillersStt')->name('fillersStt');
     Route::post('store','store')->name('store');
     Route::post('change/{id}','updateStatus')->name('change');
     Route::match( ['get', 'post'], 'edit-room-type/{id}','update')->name('update');
     Route::get('delete/{id}','delet')->name('delete');
     Route::post('dellAll','dellAll')->name('dellAll');
});

