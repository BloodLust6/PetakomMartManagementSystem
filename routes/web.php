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
    return view('welcome');
});


Route::get('/VendorMainPage', function () {
    return view('ManageVendor.VendorMainPage');
});

Route::get('/AddVendorPage', function () {
    return view('ManageVendor.AddVendorPage');
});

Route::get('/ViewVendorPage', function () {
    return view('ManageVendor.ViewVendorPage');
});

Route::get('/EditVendorPage', function () {
    return view('ManageVendor.EditVendorPage');
});

Route::get('/WeeklyReportPage', function () {
    return view('GenerateReport.WeeklyReportPage');
});

Route::get('/MonthlyReportPage', function () {
    return view('GenerateReport.MonthlyReportPage');
});

Route::get('/YearlyReportPage', function () {
    return view('GenerateReport.YearlyReportPage');
});

Route::get('/StockReportPage', function () {
    return view('GenerateReport.StockReportPage');
});

