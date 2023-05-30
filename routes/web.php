<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('navbar');
});

Route::get('/1', function () {
    return view('manageInventory.inventory_screen');
});

Route::get('/2', function () {
    return view('test');
});

Route::get('/inventory','App\Http\Controllers\inventoryController@index');
Route::get('/inventory/form','App\Http\Controllers\inventoryController@form');
Route::post('/inventory/create','App\Http\Controllers\inventoryController@create');
Route::get('/inventory/{id}/confirm','App\Http\Controllers\inventoryController@confirm');
Route::get('/inventory/{id}/delete','App\Http\Controllers\inventoryController@delete');
Route::get('/inventory/{id}/edit','App\Http\Controllers\inventoryController@edit');
Route::post('/inventory/{id}/update','App\Http\Controllers\inventoryController@update');

Route::get('/pos','App\Http\Controllers\inventoryController@pos');
Route::get('/pay','App\Http\Controllers\inventoryController@pay');
Route::get('/pay/cash','App\Http\Controllers\inventoryController@cash');
Route::get('/pay/qr','App\Http\Controllers\inventoryController@qr');
Route::get('/pay/success','App\Http\Controllers\inventoryController@success');
