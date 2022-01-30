<?php

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

route::get('/neworder','App\Http\Controllers\Admin\OrderController@index')->name('neworder');

route::get('/manageorder','App\Http\Controllers\Admin\OrderController@manage')->name('manageorder');

route::get('/updateorder','App\Http\Controllers\Admin\OrderController@updateorder')->name('updateorder');

route::get('/addproduct','App\Http\Controllers\Admin\OrderController@prductform')->name('addproduct');

route::get('/manageproduct','App\Http\Controllers\Admin\OrderController@manageproduct')->name('manageproduct');

route::get('/addcatagory','App\Http\Controllers\Admin\OrderController@addcatagory')->name('addcatagory');

route::get('/managecatagory','App\Http\Controllers\Admin\OrderController@managecatagory')->name('managecatagory');

route::get('/addorder','App\Http\Controllers\Admin\OrderController@ordertable')->name('ordertable');

route::get('/logout','App\Http\Controllers\Admin\DashboardController@logout')->name('logout');
