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

// Route::get('/', function () {
//     return view('welcome');
// });
// 
Route::get('/', ['as' => 'sites-coming-soon-page', 'uses' => 'Sites\HomeController@comingSoon']);
Route::post('/store-coming-soon', ['as' => 'store-coming-soon-page', 'uses' => 'Sites\HomeController@storeComingSoon']);

