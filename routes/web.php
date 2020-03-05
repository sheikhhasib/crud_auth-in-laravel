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
Auth::routes();
Route::get('/home','HomeController@index')->name('home');

Route::get('crud/insert','CrudController@crudinsert');
Route::get('/','CrudController@index');
Route::post('crud/insertdata','CrudController@crudinsertdata');
Route::get('customer/delete/{customer_id}','CrudController@customerdelete');
Route::get('customer/edit/{customer_id}','CrudController@customeredit');
Route::post('customer/update','CrudController@customerupdate');

