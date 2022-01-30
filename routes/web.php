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

Route::get('/', function () {
    return view('welcome');
});
// route::get('/home',function(){
//     return "I am a good boy";
// });

route::get('/admin','App\Http\Controllers\Admin\AuthController@index')->name('adminlogin');
route::post('/admin','App\Http\Controllers\Admin\AuthController@postLogin')->name('adminlogin');


route::get('/dashboard','App\Http\Controllers\Admin\DashboardController@index')->middleware('preventlogin')->name('dashboard');
