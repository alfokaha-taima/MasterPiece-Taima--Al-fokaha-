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

Route::resource('/Admin','adminController');
Route::get('/admin/editadmin/{id}/editadmin', "adminController@edit");
Route::put('/admin/updateadmin/{id}', 'adminController@update');
Route::get('/admin/delateadmin/{id}', 'adminController@destroy');



Route::resource('/Category', 'CategoryController');
Route::get('/editcategory/{id}','CategoryController@edit');
Route::put('/updatecategory/{id}', 'CategoryController@update');
Route::get('/deletecategory/{id}', 'CategoryController@destroy');



Route::resource('/Product', 'productController');
Route::get('/editproduct/{id}','productController@edit');
Route::put('/updateproduct/{id}', 'productController@update');
Route::get('/deleteproduct/{id}', 'productController@destroy');


// Route::put('/admin/updatecategory/{id}', 'CategoryController@update');
// Route::get('/admin/deletecategory/{id}', 'CategoryController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
