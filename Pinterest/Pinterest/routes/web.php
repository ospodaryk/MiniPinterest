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

Route::get('/', 'MainController@start')->name('firstpage');;
Route::get('/home', 'MainController@home')->name('home');

Route::get('/success', 'MainController@success_send')->name('success_send');
Route::get('/upload', 'MainController@create');
Route::post('/upload', 'MainController@store');

Route::get('/data', 'MainController@data');

Route::get('/user', 'MainController@user');
Route::post('/searrrch', 'MainController@search');

Route::get('/sucauth', 'MainController@sucauth')->name('sucauth');



Route::get('/admin', 'MainController@admin')->name('admin');
Route::post('/admin/send', 'MainController@admin_send');
Route::post('/search', 'MainController@user_search');

Route::get('/aut', 'MainController@autho1');
Route::post('/aut', 'MainController@autho2');


Route::get('/sig', 'MainController@sig1');
Route::post('/sig', 'MainController@sig2');
