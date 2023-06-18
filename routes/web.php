<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Report Controller
Route::get('/inventory','App\Http\Controllers\inventoryController@index');
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

//inventory Controller
Route::get('/inventory/form','App\Http\Controllers\inventoryController@form');
Route::post('/inventory/create','App\Http\Controllers\inventoryController@create');
Route::get('/inventory/{id}/confirm','App\Http\Controllers\inventoryController@confirm');
Route::get('/inventory/{id}/delete','App\Http\Controllers\inventoryController@delete');
Route::get('/inventory/{id}/edit','App\Http\Controllers\inventoryController@edit');
Route::post('/inventory/{id}/update','App\Http\Controllers\inventoryController@update');

//purchase Controller
Route::get('/pos','App\Http\Controllers\purchaseController@pos');
Route::post('/add','App\Http\Controllers\purchaseController@add');
Route::get('/pay','App\Http\Controllers\purchaseController@pay');

//transaction Controller
Route::get('/pay/cash','App\Http\Controllers\transactionController@cash');
Route::get('/pay/balance','App\Http\Controllers\transactionController@balance');
Route::get('/pay/qr','App\Http\Controllers\transactionController@qr');
Route::get('/pay/success','App\Http\Controllers\transactionController@success');

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

