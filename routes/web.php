<?php

use App\Http\Controllers\ItemsController;
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

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('/barang', 'BarangController@index');

// Items
// Route::get('/items', 'ItemsController@index');
// Route::get('/items/create', 'ItemsController@create');
// Route::get('/items/{item}', 'ItemsController@show');
// Route::post('/items', 'ItemsController@store');
// Route::delete('/items/{item}', 'ItemsController@destroy');
// Route::get('/items/{item}/edit', 'ItemsController@edit');
// Route::put('/items/{item}', 'ItemsController@update');

Route::resource('items', 'ItemsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');