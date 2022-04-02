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

route::get('/user','App\Http\Controllers\Admin\UserController@User')->name('user');

route::get('/manageorder','App\Http\Controllers\Admin\OrderController@manage')->name('manageorder');

route::get('/updateorder','App\Http\Controllers\Admin\OrderController@updateorder')->name('updateorder');

route::get('/addproduct','App\Http\Controllers\Admin\ProductController@prductform')->name('addproduct');

route::get('/editproduct/{id}','App\Http\Controllers\Admin\ProductController@editproduct')->name('editproduct');

route::post('/addproduct','App\Http\Controllers\Admin\ProductController@addProduct')->name('addproduct');

route::put('/editproduct/{id}','App\Http\Controllers\Admin\ProductController@updateProduct')->name('editproduct');

route::get('/manageproduct','App\Http\Controllers\Admin\ProductController@manageproduct')->name('manageproduct');


route::get('/addcatagory','App\Http\Controllers\Admin\CatagoryController@addcatagory')->name('addcatagory');

route::post('/addcatagory','App\Http\Controllers\Admin\CatagoryController@postCatagory')->name('addcatagory');

route::get('/parentcatagory','App\Http\Controllers\Admin\CatagoryController@parentCatagory')->name('parentcatagory');

route::get('/editparent/{id}','App\Http\Controllers\Admin\CatagoryController@editParent')->name('editparent');
 
route::put('/editparent/{id}','App\Http\Controllers\Admin\CatagoryController@updateParent')->name('editparent');

route::get('/childcategory','App\Http\Controllers\Admin\CatagoryController@childCatagory')->name('childcatagory');

route::get('/editchild/{id}','App\Http\Controllers\Admin\CatagoryController@editChild')->name('editchild');

route::post('/editchild/{id}','App\Http\Controllers\Admin\CatagoryController@updateChild')->name('editchild');


route::get('/addorder','App\Http\Controllers\Admin\OrderController@ordertable')->name('ordertable');

route::get('/logout','App\Http\Controllers\Admin\DashboardController@logout')->name('logout');

route::get('/appsetting','App\Http\Controllers\Admin\Setting@appsetting')->name('appsetting');

route::post('/appsetting','App\Http\Controllers\Admin\Setting@appnewappsetting')->name('appsetting');

route::get('/smssetting','App\Http\Controllers\Admin\Setting@smssetting')->name('smssetting');

route::get('/emailsetting','App\Http\Controllers\Admin\Setting@emailsetting')->name('emailsetting');

route::get('/banner','App\Http\Controllers\Admin\Cms@banner')->name('banner');

route::post('/banner','App\Http\Controllers\Admin\Cms@addnewbanner')->name('banner');


route::get('/bottombanner','App\Http\Controllers\Admin\Cms@bottombanner')->name('bottombanner');

route::get('/shopdetails','App\Http\Controllers\Admin\Cms@shopdetails')->name('shopdetails');

route::get('/deliveryinfo','App\Http\Controllers\Admin\Cms@deliveryinfo')->name('deliveryinfo');

route::get('/privercy','App\Http\Controllers\Admin\Cms@privercy')->name('privercy');

route::post('/privercy','App\Http\Controllers\Admin\Cms@addnewprivercy')->name('privercy');


route::get('/editdeliveryinfo','App\Http\Controllers\Admin\Cms@editdeliveryinfo')->name('editdeliveryinfo');

route::get('/topslider', 'App\Http\Controllers\Admin\Cms@topslider')->name('topslider');

route::post('/topslider', 'App\Http\Controllers\Admin\Cms@addnewtopslider')->name('topslider');



route::get('/subscriber','App\Http\Controllers\Admin\EnvelopController@subscriber')->name('subscriber');
route::get('/contactsms','App\Http\Controllers\Admin\EnvelopController@contactsms')->name('contactsms');



