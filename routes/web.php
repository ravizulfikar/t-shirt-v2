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

Route::get('/home', 'PagesController@index');
// Demo routes
Route::get('/datatables', 'PagesController@datatables');
Route::get('/ktdatatables', 'PagesController@ktDatatables');
Route::get('/select2', 'PagesController@select2');
Route::get('/icons/custom-icons', 'PagesController@customIcons');
Route::get('/icons/flaticon', 'PagesController@flaticon');
Route::get('/icons/fontawesome', 'PagesController@fontawesome');
Route::get('/icons/lineawesome', 'PagesController@lineawesome');
Route::get('/icons/socicons', 'PagesController@socicons');
Route::get('/icons/svg', 'PagesController@svg');

// Quick search dummy route to display html elements in search dropdown (header search)
Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');


Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function() { return view('beranda'); })->name('beranda');
Route::get('/product', function() { return view('product'); })->name('products');
Route::get('/costum', function() { return view('costum'); })->name('costums');


//Order Pages
Route::get('/order', 'OrderController@index')->name('orders');

//Clothes Type Page
Route::get('/clothes', 'ClothesController@index')->name('clothes');
Route::post('/clothes/store', 'ClothesController@store')->name('store_clothes');

//Colors Page
Route::get('/colors', 'ColorsController@index')->name('colors');

//Template Page
Route::get('/templates', 'TemplatesController@index')->name('templates');

//Catalogs Page
Route::get('/catalogs', 'CatalogsController@index')->name('catalogs');