<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AccountController;

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
    return view('welcome');
});


Route::get('/VendorMainPage', function () {
    return view('VendorMainPage');
});

Route::get('/AddVendorPage', function () {
    return view('AddVendorPage');
});

Route::get('/ViewVendorPage', function () {
    return view('ViewVendorPage');
});

Route::get('/EditVendorPage', function () {
    return view('EditVendorPage');
});

Route::get('/WeeklyReportPage', function () {
    return view('WeeklyReportPage');
});


// Account Controller
Route::controller(AccountController::class)->group(function () {
    Route::get('/account/make-opening','makeOpening');
    Route::post('/account/open-register','openRegister');
    Route::get('/account/view-sales','viewSales');
    Route::post('/account/close-register','closeRegister');
    Route::get('/account/view-profit','viewProfit');
    Route::get('/account/get-profit-data','getProfitData');
    Route::get('/account/download-statement','downloadStatement');
    Route::get('/account/view-expenses','viewExpenses');
    Route::get('/account/add-expenses','addExpenses');
    Route::post('/account/insert-expenses','insertExpenses');
    Route::get('/account/get-expenses','getExpenses')->name('getExpenses');

});