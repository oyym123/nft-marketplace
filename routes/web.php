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
Route::get('web3/index', 'Web3Controller@index');
Route::post('media/create', 'MediaController@create');
Route::get("img/{fileName}", "FileController@img");
Route::get("music/{fileName}", "FileController@music");
Route::get("video/{fileName}", "FileController@video");
Route::get("avatar/{fileName}", "FileController@avatar");

Route::post('user/create', 'UserController@create');
Route::get('user/{follow}/{owner}', 'UserController@index');
Route::middleware('cors')->group(function () {
    Route::get('nft/{id}', 'NftController@detail');
});

Route::post('nft/create', 'NftController@create');
Route::post('nft/forSale', 'NftController@forSale');
Route::post('nft/buy', 'NftController@buy');

//收藏
Route::post('collect/create', 'CollectController@create');

//关注
Route::post('follow/create', 'FollowController@create');

//竞拍
Route::post('bids/create', 'BidsController@create');
Route::get('bids/{nftId}', 'BidsController@index');

