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

Route::get('/', 'HomeController@index');
Route::get('/{locale}', ['as' => 'lang.change', 'uses' => 'LanguageController@setLocale']);
Route::get('item/detail', 'ItemController@detail');
Route::get('item/index', 'ItemController@index');
Route::get('item/mint', 'ItemController@mint');
Route::get('user/detail', 'UserController@detail');
Route::get('notice/index', 'NoticeController@index');




