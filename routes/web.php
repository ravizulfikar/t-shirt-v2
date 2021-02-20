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

Route::get('/dashboard', 'PagesController@index');
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
Route::get('/products', function() { return view('product'); })->name('products');
Route::get('/costum', function() { return view('costum'); })->name('costums');


//Order Pages
Route::get('/order', 'OrderController@index')->name('orders');

//Clothes Type Page
Route::get('/clothes', 'ClothesController@index')->name('clothes');
Route::post('/clothes/store', 'ClothesController@store')->name('store_clothes');
Route::post('/clothes/{id}/updated', 'ClothesController@update')->name('update_clothes');
Route::get('/clothes/{id}/delete', 'ClothesController@destroy')->name('delete_clothes');

//Colors Page
Route::get('/colors', 'ColorsController@index')->name('colors');
Route::post('/colors/store', 'ColorsController@store')->name('store_colors');
Route::post('/colors/{id}/updated', 'ColorsController@update')->name('update_colors');
Route::get('/colors/{id}/delete', 'ColorsController@destroy')->name('delete_colors');

//Template Page
Route::get('/templates', 'TemplatesController@index')->name('templates');
Route::post('/templates/store', 'TemplatesController@store')->name('store_templ');
Route::post('/templates/{id}/updated', 'TemplatesController@update')->name('update_templ');
Route::get('/templates/{id}/delete', 'TemplatesController@destroy')->name('delete_templ');

//Colors Page
Route::get('/merks', 'MerksController@index')->name('merks');
Route::post('/merks/store', 'MerksController@store')->name('store_merks');
Route::post('/merks/{id}/updated', 'MerksController@update')->name('update_merks');
Route::get('/merks/{id}/delete', 'MerksController@destroy')->name('delete_merks');

//Catalogs Page
Route::get('/catalogs', 'CatalogsController@index')->name('catalogs');

/////////////////////////////////////////////////////////////////////////////////////
//Page Product
Route::get('/product', 'ProductController@index')->name('Product');

//Page Cabang
Route::get('/branch', 'BranchController@index')->name('Branch');

//Page Price List
Route::get('/price-list', 'PriceListController@index')->name('PriceList');

//Page Stock
Route::get('/stock', 'StockController@index')->name('Stock');

//Page Kasir
Route::get('/cashier', 'CashierController@index')->name('Cashier');

//Page Sales Order
Route::get('/sales-order', 'SalesOrderController@index')->name('SalesOrder');

//Page Invoice
Route::get('/invoice', 'InvoiceController@index')->name('Invoice');

//Page Inventory
Route::get('/inventory', 'InventoryController@index')->name('Inventory');

//Page Request
Route::get('/request', 'RequestController@index')->name('Request');