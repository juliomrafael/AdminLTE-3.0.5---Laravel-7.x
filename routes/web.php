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

Route::get('/', 'HomeController@index')->name('index');
Route::get('/users', 'HomeController@users')->name('users');
Route::get('/account', 'HomeController@account')->name('account');
Route::get('/datatable', 'HomeController@datatable')->name('datatable');
Route::get('/add', 'HomeController@add')->name('add');
Route::get('/details', 'HomeController@details')->name('details');
Route::get('/edit', 'HomeController@edit')->name('edit');
