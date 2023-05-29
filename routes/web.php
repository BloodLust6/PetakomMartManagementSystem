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

