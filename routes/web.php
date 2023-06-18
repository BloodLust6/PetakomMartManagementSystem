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

Route::get('/VendorMainPage','App\Http\Controllers\VendorController@ViewMainPage');
Route::get('/AddVendorPage','App\Http\Controllers\VendorController@AddVendorPage');
Route::get('/ViewVendorPage','App\Http\Controllers\VendorController@ViewVendorPage');
Route::get('/EditVendorPage','App\Http\Controllers\VendorController@EditVendorPage');
Route::get('/create','App\Http\Controllers\VendorController@create');
Route::get('/DeleteVendorPage/{id}/delete','App\Http\Controllers\VendorController@delete');
Route::get('/EditVendorPage/{id}/edit','App\Http\Controllers\VendorController@edit');
Route::post('/UpdateVendorPage/{id}/update','App\Http\Controllers\VendorController@update');
Route::get('/WeeklyReportPage','App\Http\Controllers\ReportController@ViewWeeklyReport');
Route::get('/MonthlyReportPage','App\Http\Controllers\ReportController@ViewMonthlyReport');
Route::get('/YearlyReportPage','App\Http\Controllers\ReportController@ViewYearlyReport');
Route::get('/StockReportPage','App\Http\Controllers\ReportController@ViewStockReport');

Route::get('/inventory/form','App\Http\Controllers\inventoryController@form');
Route::post('/inventory/create','App\Http\Controllers\inventoryController@create');
Route::get('/inventory/{id}/confirm','App\Http\Controllers\inventoryController@confirm');
Route::get('/inventory/{id}/delete','App\Http\Controllers\inventoryController@delete');
Route::get('/inventory/{id}/edit','App\Http\Controllers\inventoryController@edit');
Route::post('/inventory/{id}/update','App\Http\Controllers\inventoryController@update');