<?php

use Illuminate\Support\Facades\Route;
use App\Notifications\InvoicePaid;
use App\Models\User;

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



Route::get('/admin','App\Http\Controllers\Admin\AuthController@index')->name('adminlogin');
Route::post('/admin','App\Http\Controllers\Admin\AuthController@postLogin')->name('adminlogin');


Route::get('/dashboard','App\Http\Controllers\Admin\DashboardController@index')->middleware('preventlogin')->name('dashboard');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/send-notification', function(){
    $users = User::all();
    foreach($users as $user){
        $user->notify(new InvoicePaid());
    }
    return redirect()->back();
})->name('send-notification');

