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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'App\Http\Controllers\HomeController@getHome');


Route::get('login', function () {
    return view('auth.login');
});

Route::get('logout', function () {
    return view('auth.logout');
});

Route::get('catalog', 'App\Http\Controllers\CatalogController@getIndex');

Route::get('catalog/show/{id}', 'App\Http\Controllers\CatalogController@getShow');

Route::get('catalog/create', 'App\Http\Controllers\CatalogController@getCreate');

Route::get('catalog/edit/{id}', 'App\Http\Controllers\CatalogController@getEdit');
