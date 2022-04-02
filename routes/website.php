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





Route::get('/','App\Http\Controllers\WebsiteController\HomeController@home')->name('home');


Route::get('/shop','App\Http\Controllers\WebsiteController\ShopController@shop')->name('shop');

// start pages dropdown
Route::get('/addCart/{id}','App\Http\Controllers\WebsiteController\ShopingCartController@addCart')->name('addCart');
// route::get('/removeCart/{id}','App\Http\Controllers\Customer\CartController@removeCart')->name('removeCart');
Route::get('/checkout','App\Http\Controllers\WebsiteController\CheckoutController@checkout')->name('checkout');
// end pages dropdown

Route::get('/blog','App\Http\Controllers\WebsiteController\BlogController@blog')->name('blog');

Route::get('/contact','App\Http\Controllers\WebsiteController\ContactController@contact')->name('contact');
Route::post('/contact-email','App\Http\Controllers\WebsiteController\ContactController@ContactUsForm')->name('contact-email');

Route::get('/webprivercy','App\Http\Controllers\WebsiteController\PrivercyController@webprivercy')->name('webprivercy');

Route::get('/userlogin','App\Http\Controllers\WebsiteController\HomeController@userlogin')->name('userlogin');

Route::get('/userregister','App\Http\Controllers\WebsiteController\HomeController@userregister')->name('userregister');





