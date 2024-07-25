<?php

use App\Http\Controllers\Admin\CateServiceController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\CategoriController;
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

Route::prefix('/admin/categori')->name('admin.categori.')->middleware(['check-user','check-admin'])->controller(CateServiceController::class)->group( function(){
     Route::get('types-of-services','index')->name('list');
     Route::get('types-of-services/create','add')->name('add');
     Route::get('fillstt','')->name('fillersStt');
     Route::post('store','store')->name('store');
     Route::post('change/{id}','Changestt')->name('change');
     Route::match( ['get', 'post'], 'types-of-services/edit/{id}','update')->name('update');
     Route::get('delete/{id}','delet')->name('delete');
});

